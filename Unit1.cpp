//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "Unit1.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
#include<dos.h>
#include<stdio.h>
TForm1 *Form1;
struct date d;
struct time t;

//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{
  Form1->Caption="Midps";
}
//---------------------------------------------------------------------------


void __fastcall TForm1::Button2Click(TObject *Sender)
{
Timer2->Enabled=false;//dezactiveaza buton
 Button1->Enabled=true;//activeaza buton
  Button3->Enabled=true;//activeaza buton

}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button1Click(TObject *Sender)
{
            Timer2->Enabled=true;
TRect dreptunghi;
PaintBox1->Canvas->Brush->Color = clBlack;
PaintBox1->Canvas->Brush->Style = bsVertical;
PaintBox1->Canvas->FloodFill(1,1,clBlack,fsBorder);//hashuram tot paintboxul
PaintBox1->Canvas->Brush->Style = bsHorizontal;//selectam stilu; orizontal
PaintBox1->Canvas->FloodFill(100,100,clRed,fsBorder);//umplem dreptunghiul cu hashurare
                         Button1->Enabled=false;//dezactivarea butonului 
  Button3->Enabled=false;//dezactivarea butonului

}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button3Click(TObject *Sender)
{
 Close();
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Timer2Timer(TObject *Sender)
{
 TRect dreptunghi;
PaintBox1->Canvas->Pen->Color=clRed;
int i, a,b;
if( i==0) PaintBox1->Canvas->MoveTo(0,70);
i=i+5;
PaintBox1->Canvas->LineTo(i,a=65+rand()%20);
b=a-65;
   Edit1->Text=Timer2->Tag;
 Timer2->Tag=i;
  Panel2->Top=256+b;
  Panel2->Height=121-b;
  Panel1->Height=73+b;
  if(i>210) {i=0; PaintBox1->Repaint();
  PaintBox1->Canvas->Brush->Color = clGreen;
PaintBox1->Canvas->Brush->Style = bsCross;
PaintBox1->Canvas->FloodFill(1,1,clBlack,fsBorder);
       
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Timer1Timer(TObject *Sender)
{
char buf[20];//declararea tabelului buf
getdate(&d);//se cer datele data
gettime(&t);//initializeaza variabila time
sprintf(buf,"%02d-%02d-%4d %02d:%02d:%02d",d.da_day,d.da_mon,d.da_year,
t.ti_hour,t.ti_min,t.ti_sec);//se inscriu in tabel datele time si da intr-o anumita forma
Edit1->Text=(AnsiString)buf;//se reediteaza textul din caseta edit


}
//---------------------------------------------------------------------------
