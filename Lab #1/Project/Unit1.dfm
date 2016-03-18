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
    Left = 256
    Top = 120
    Width = 39
    Height = 13
    Caption = #1057#1090#1072#1090#1091#1089' i'
  end
  object Label2: TLabel
    Left = 112
    Top = 40
    Width = 399
    Height = 30
    Caption = 'Incrementare decrementare contor'
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clBlue
    Font.Height = -24
    Font.Name = 'MS Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Button1: TButton
    Left = 464
    Top = 112
    Width = 121
    Height = 41
    Caption = 'Up'
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 464
    Top = 176
    Width = 121
    Height = 41
    Caption = 'Down'
    TabOrder = 1
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 280
    Top = 240
    Width = 121
    Height = 41
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
