package com.example.firstapp;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.media.AudioManager;
import android.media.SoundPool;
import android.os.CountDownTimer;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends Activity implements SoundPool.OnLoadCompleteListener {
    final int MAX_STREAMS = 5;
    final String LOG_TAG = "myLogs";
    public static SoundPool sp;
    public static int soundIdShot;

    static int tW;
    static int tR;
    static int currentTime;
    static CountDownTimer tim1;
    public static Context c;
    EditText textWork;
    EditText textRelax;
    static TextView time;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
        textWork = (EditText) findViewById(R.id.TextWork);
        textRelax = (EditText) findViewById(R.id.TextRelax);
        time = (TextView) findViewById(R.id.time);

        sp = new SoundPool(MAX_STREAMS, AudioManager.STREAM_MUSIC, 0);
        sp.setOnLoadCompleteListener(this);

        soundIdShot = sp.load(this, R.raw.ring, 1);
        tW = tR = 0;
    }

    public void butStartOnClick(final View view) {
        try {
            stopService(new Intent(this, MyService.class));
        } catch (Exception e) {}
        try {
            tW = Integer.parseInt(textWork.getText().toString());
            tR = Integer.parseInt(textRelax.getText().toString());
            currentTime = tW;
            c = view.getContext();
            startService(new Intent(c, MyService.class));
            //setTimer(c);
        } catch (Exception e) {
            tW = tR = 0;
        }

    }

    static public void setTimer(final Context cont) {
        tim1 = new CountDownTimer(currentTime * 60 * 1000, 1000) {
            int i = 1;
            String str = "";

            public void onTick(long millisUntilFinished) {
                int cur = currentTime * 60 - i++;
                str = (cur / 60) + ":" + (cur % 60);
                time.setText(str);

            }

            public void onFinish() {
                sp.play(soundIdShot, 1, 1, 0, 0, 1);
                AlertDialog.Builder builder = new AlertDialog.Builder(cont);
                builder.setTitle("Важное сообщение!")
                        .setMessage("Время истекло!")
                        .setCancelable(false)
                        .setNegativeButton("ОК",
                                new DialogInterface.OnClickListener() {
                                    public void onClick(DialogInterface dialog, int id) {
                                        if (currentTime == tW) currentTime = tR;
                                        else currentTime = tW;
                                        setTimer(cont);
                                        dialog.cancel();
                                    }
                                });
                AlertDialog alert = builder.create();
                alert.show();


            }
        }.start();
    }


    public void butCancelOnClick(View view) {
        tim1.cancel();
        stopService(new Intent(this, MyService.class));

    }

    @Override
    public void onLoadComplete(SoundPool soundPool, int sampleId, int status) {

    }
}
