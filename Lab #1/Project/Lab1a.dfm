object Form1: TForm1
  Left = 192
  Top = 124
  Width = 928
  Height = 480
  Caption = 'Form1'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Label1: TLabel
    Left = 184
    Top = 168
    Width = 39
    Height = 13
    Caption = #1057#1090#1072#1090#1091#1089' i'
  end
  object Label2: TLabel
    Left = 104
    Top = 96
    Width = 451
    Height = 29
    Caption = 'Incrementare decrementare contor'
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clRed
    Font.Height = -24
    Font.Name = 'MS Reference Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Button1: TButton
    Left = 264
    Top = 128
    Width = 105
    Height = 25
    Caption = 'Up'
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 264
    Top = 184
    Width = 105
    Height = 25
    Caption = 'Down'
    TabOrder = 1
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 264
    Top = 224
    Width = 105
    Height = 25
    Caption = 'Exit'
    TabOrder = 2
    OnClick = Button3Click
  end
  object Edit1: TEdit
    Left = 264
    Top = 160
    Width = 153
    Height = 21
    TabOrder = 3
  end
end
