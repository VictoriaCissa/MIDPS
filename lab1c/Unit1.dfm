object Form1: TForm1
  Left = 306
  Top = 155
  Width = 293
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
    Left = 288
    Top = 24
    Width = 90
    Height = 13
    Caption = 'Data si ora curente'
  end
  object Label2: TLabel
    Left = 176
    Top = 72
    Width = 282
    Height = 16
    Caption = 'Resurse grafice ale mediului C++ Builder'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object PaintBox1: TPaintBox
    Left = 216
    Top = 112
    Width = 257
    Height = 193
  end
  object Button1: TButton
    Left = 72
    Top = 136
    Width = 75
    Height = 25
    Caption = 'Start'
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 72
    Top = 168
    Width = 75
    Height = 25
    Caption = 'Stop'
    TabOrder = 1
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 72
    Top = 200
    Width = 75
    Height = 25
    Caption = 'Exit'
    TabOrder = 2
    OnClick = Button3Click
  end
  object Edit1: TEdit
    Left = 280
    Top = 40
    Width = 121
    Height = 21
    TabOrder = 3
  end
  object Panel1: TPanel
    Left = 160
    Top = 112
    Width = 49
    Height = 57
    Color = clWindowText
    TabOrder = 4
  end
  object Panel2: TPanel
    Left = 160
    Top = 176
    Width = 49
    Height = 129
    Color = clActiveBorder
    TabOrder = 5
  end
  object Timer1: TTimer
    OnTimer = Timer1Timer
    Left = 32
    Top = 24
  end
  object Timer2: TTimer
    OnTimer = Timer2Timer
    Left = 32
    Top = 80
  end
end