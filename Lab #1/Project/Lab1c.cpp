//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop
#include <stdio.h>
#include "Lab1c.h"
#include "dos.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
struct date d;
struct time t;
int x=0;
int y, yprev;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{
}
//---------------------------------------------------------------------------


void __fastcall TForm1::StartClick(TObject *Sender)
{
x = 0;
Timer2->Enabled = true;
Start->Enabled = false;
Stop->Enabled = true;
Form1->Repaint();
for (int i = 0; i < 201; i+=10){
PaintBox1->Canvas->MoveTo(i,0);
PaintBox1->Canvas->LineTo(i,201);
}
for (int i = 0; i < 201; i+=10){ 
PaintBox1->Canvas->MoveTo(0,i); 
PaintBox1->Canvas->LineTo(201,i); 
} 
PaintBox1->Canvas->MoveTo(0,100);
}
//---------------------------------------------------------------------------
void __fastcall TForm1::ExitClick(TObject *Sender)
{
        Close();
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Timer1Timer(TObject *Sender)
{
char buf[20];
getdate(&d);
gettime(&t);
sprintf(buf,"%02d-%02d-%4d %02d:%02d:%02d",d.da_day,d.da_mon,d.da_year,
t.ti_hour,t.ti_min,t.ti_sec);
Edit1->Text=(AnsiString)buf;

}
//---------------------------------------------------------------------------
void __fastcall TForm1::StopClick(TObject *Sender)
{
Timer2->Enabled=false;
Start->Enabled=true;
Stop->Enabled=false;
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Timer2Timer(TObject *Sender)
{
  randomize(); 
yprev = y;
y = random(201)+1;
x+=1;
if(x >= 201){
Form1->Repaint();
for (int i = 0; i < 201; i+=10){
PaintBox1->Canvas->MoveTo(i,0);
PaintBox1->Canvas->LineTo(i,201);
}
for (int i = 0; i < 201; i+=10){
PaintBox1->Canvas->MoveTo(0,i);
PaintBox1->Canvas->LineTo(201,i);
}
PaintBox1->Canvas->MoveTo(0,yprev);
x=0;
}
PaintBox1->Canvas->Pen->Color = clBlue;
PaintBox1->Canvas->LineTo(x,y);
PaintBox1->Canvas->Pen->Color = clBlack;
Panel1->Height = y;
Panel2->Top = Panel1->Top + Panel1->Height; 
Panel2->Height = 200 - Panel1->Height;


}
//---------------------------------------------------------------------------
