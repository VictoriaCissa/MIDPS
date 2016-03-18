//---------------------------------------------------------------------------
#include <math.h>
#include <vcl.h>
#pragma hdrstop

#include "Unit1.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
    int from[2] = {0,100};
int to[2] = {0,100};

//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{

}
//---------------------------------------------------------------------------

void __fastcall TForm1::Timer1Timer(TObject *Sender)
{
      TDateTime time = Now();
     this->Edit1->Text = time;

}
//---------------------------------------------------------------------------

void __fastcall TForm1::PaintBox1Click(TObject *Sender)
{
 for(int i=0;i<201;i+=10) {
                this->PaintBox1->Canvas->MoveTo(0,i);
                this->PaintBox1->Canvas->LineTo(201,i);

                this->PaintBox1->Canvas->MoveTo(i,0);
                this->PaintBox1->Canvas->LineTo(i,201);
                }
       
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button1Click(TObject *Sender)
{
 this->Timer2->Enabled = true;
        this->Button2->Enabled = true;
        this->Button1->Enabled = false;
       
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button2Click(TObject *Sender)
{
     this->Timer2->Enabled = false;
        this->Button2->Enabled = false;
        this->Button1->Enabled = true;
        
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Timer2Timer(TObject *Sender)
{
     this->PaintBox1->Canvas->Pen->Color = RGB(250,0,0);
    randomize();
   to[0]++;
   to[1] += -5+rand()%10;

   this->PaintBox1->Canvas->MoveTo(from[0],from[1]);
   this->PaintBox1->Canvas->LineTo(to[0],to[1]);

   from[0] = to[0];
   from[1] = to[1];



}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button3Click(TObject *Sender)
{
  Close();
}
//---------------------------------------------------------------------------



