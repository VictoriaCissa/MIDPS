object Form1: TForm1
  Left = 264
  Top = 231
  Width = 796
  Height = 419
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
    Left = 416
    Top = 64
    Width = 134
    Height = 24
    Caption = #1058#1077#1082#1091#1097#1072#1103' '#1076#1072#1090#1072
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clFuchsia
    Font.Height = -19
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Label2: TLabel
    Left = 408
    Top = 152
    Width = 227
    Height = 24
    Caption = 'C++ Builder Cronometru'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clFuchsia
    Font.Height = -19
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Label3: TLabel
    Left = 136
    Top = 8
    Width = 542
    Height = 40
    Caption = 'Realizarea unui  cronometru in C++Builder'
    Color = clMenu
    Font.Charset = ANSI_CHARSET
    Font.Color = clGreen
    Font.Height = -29
    Font.Name = 'Nirmala UI'
    Font.Style = [fsItalic]
    ParentColor = False
    ParentFont = False
  end
  object Edit1: TEdit
    Left = 232
    Top = 64
    Width = 169
    Height = 21
    TabOrder = 0
  end
  object Edit2: TEdit
    Left = 232
    Top = 152
    Width = 169
    Height = 21
    TabOrder = 1
    Text = '0 min 0 sec 0 zec'
  end
  object Button1: TButton
    Left = 88
    Top = 64
    Width = 97
    Height = 25
    Caption = 'Start'
    TabOrder = 2
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 88
    Top = 104
    Width = 97
    Height = 25
    Caption = 'Stop'
    Enabled = False
    TabOrder = 3
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 88
    Top = 144
    Width = 97
    Height = 25
    Caption = 'Zero'
    Enabled = False
    TabOrder = 4
    OnClick = Button3Click
  end
  object Button4: TButton
    Left = 256
    Top = 184
    Width = 113
    Height = 25
    Caption = 'Exit'
    TabOrder = 5
    OnClick = Button4Click
  end
  object Timer1: TTimer
    OnTimer = Timer1Timer
    Left = 592
    Top = 56
  end
  object Timer2: TTimer
    Enabled = False
    Interval = 100
    OnTimer = Timer2Timer
    Left = 592
    Top = 88
  end
end
