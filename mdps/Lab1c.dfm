object Form1: TForm1
  Left = 293
  Top = 131
  Width = 539
  Height = 453
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
  object Lable1: TLabel
    Left = 216
    Top = 16
    Width = 128
    Height = 13
    Caption = 'Data si ora curente'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clPurple
    Font.Height = -13
    Font.Name = 'MS PGothic'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Label2: TLabel
    Left = 216
    Top = 80
    Width = 278
    Height = 16
    Caption = 'Resurse graficeale mediului  C++Builder'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clPurple
    Font.Height = -13
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object PaintBox1: TPaintBox
    Left = 201
    Top = 120
    Width = 217
    Height = 201
  end
  object Start: TButton
    Left = 32
    Top = 160
    Width = 73
    Height = 25
    Caption = 'Start'
    TabOrder = 0
    OnClick = StartClick
  end
  object Stop: TButton
    Left = 32
    Top = 192
    Width = 73
    Height = 25
    Caption = 'Stop'
    TabOrder = 1
    OnClick = StopClick
  end
  object Exit: TButton
    Left = 32
    Top = 232
    Width = 73
    Height = 25
    Caption = 'Exit'
    TabOrder = 2
    OnClick = ExitClick
  end
  object Edit1: TEdit
    Left = 216
    Top = 48
    Width = 217
    Height = 21
    TabOrder = 3
  end
  object Panel1: TPanel
    Left = 152
    Top = 120
    Width = 49
    Height = 100
    Color = clBtnShadow
    TabOrder = 4
  end
  object Panel2: TPanel
    Left = 152
    Top = 220
    Width = 49
    Height = 100
    Color = clMaroon
    TabOrder = 5
  end
  object Timer1: TTimer
    OnTimer = Timer1Timer
    Left = 40
    Top = 24
  end
  object Timer2: TTimer
    Enabled = False
    Interval = 500
    OnTimer = Timer2Timer
    Left = 40
    Top = 72
  end
end
