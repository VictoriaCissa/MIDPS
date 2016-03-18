//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include <stdio.h>
#include "Lab1b.h"
#include "dos.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
int i=0;
struct date d;
struct time t;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{
}
//---------------------------------------------------------------------------







void __fastcall TForm1::Button1Click(TObject *Sender)
{
Timer2->Enabled = true;
Button1->Enabled = false;
Button2->Enabled = true;
Button3->Enabled = false;
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button4Click(TObject *Sender)
{
Close();
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button2Click(TObject *Sender)
{
Timer2->Enabled = false;
Button1->Enabled = false;
Button2->Enabled = false;
Button3->Enabled = true;
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button3Click(TObject *Sender)
{
i=0;
Edit2->Text="0 min 0 sec 0 zec";
Button1->Enabled = true;
Button2->Enabled = false;
Button3->Enabled = false;
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

void __fastcall TForm1::Timer2Timer(TObject *Sender)
{
i++;
Edit2->Text = IntToStr(i/600) + " min " + (i%600)/10 + " sec " + IntToStr(i%10) + " zec";
}
//---------------------------------------------------------------------------



