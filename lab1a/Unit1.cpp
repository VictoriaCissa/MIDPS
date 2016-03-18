//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "Unit1.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{
}
//---------------------------------------------------------------------------


void __fastcall TForm1::Button1Click(TObject *Sender)
{

        char *cislo ;
        if(Edit1->GetTextLen() > 0)  {

                int cislo_to_up =   this->Edit1->Text.ToInt();
                 ++cislo_to_up;
                 char buffer[30];
                 int rand = 10;
                 char *msg ;
                 msg =  itoa(cislo_to_up,buffer,rand);
                 if(msg != NULL)
                         Edit1->SetTextBuf(msg);
                }
        else{
            Edit1->SetTextBuf("net cisla");}
}


//---------------------------------------------------------------------------
void __fastcall TForm1::Button2Click(TObject *Sender)
{
 char *cislo ;
        if(Edit1->GetTextLen() > 0)  {

                int cislo_to_up = this->Edit1->Text.ToInt();
                 --cislo_to_up;
                 char buffer[30]; //буфер обмена
                 int rand = 10; // система исчисления
                 char *msg ;
                 msg =  itoa(cislo_to_up,buffer,rand);//конвертация в строку
                 if(msg != NULL)
                         Edit1->SetTextBuf(msg);
                }
        else{
            Edit1->SetTextBuf("net cisla");}


}
//---------------------------------------------------------------------------

void __fastcall TForm1::Button3Click(TObject *Sender)
{

              this->Close();
}
//---------------------------------------------------------------------------



