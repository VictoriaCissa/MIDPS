object Form1: TForm1
  Left = 189
  Top = 122
  Width = 544
  Height = 480
  Caption = #1055#1088#1080#1083#1086#1078#1077#1085#1080#1077' '#8470'2'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clBackground
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Label1: TLabel
    Left = 232
    Top = 40
    Width = 114
    Height = 25
    Caption = 'Curent_Time'
    FocusControl = Button1
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clRed
    Font.Height = -21
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
  end
  object Label2: TLabel
    Left = 232
    Top = 104
    Width = 205
    Height = 25
    Caption = #1057'++Builder  Chronograf'
    Color = clBtnFace
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clRed
    Font.Height = -21
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentColor = False
    ParentFont = False
  end
  object Label3: TLabel
    Left = 176
    Top = 16
    Width = 297
    Height = 20
    Caption = 'Realizarea unei cronometru in C++ Builder'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clRed
    Font.Height = -17
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
  end
  object Button1: TButton
    Left = 392
    Top = 168
    Width = 75
    Height = 25
    Caption = 'Exit'
    TabOrder = 0
    OnClick = Button1Click
  end
  object Edit1: TEdit
    Left = 232
    Top = 136
    Width = 233
    Height = 21
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
    TabOrder = 1
  end
  object Edit2: TEdit
    Left = 232
    Top = 72
    Width = 121
    Height = 21
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
    TabOrder = 2
  end
  object Button2: TButton
    Left = 128
    Top = 104
    Width = 75
    Height = 25
    Caption = 'Start'
    TabOrder = 3
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 128
    Top = 136
    Width = 75
    Height = 25
    Caption = 'Stop'
    TabOrder = 4
    OnClick = Button3Click
  end
  object Button4: TButton
    Left = 128
    Top = 168
    Width = 75
    Height = 25
    Caption = 'Clear'
    TabOrder = 5
    OnClick = Button4Click
  end
  object Timer1: TTimer
    Interval = 100
    OnTimer = Timer1Timer
    Left = 32
    Top = 32
  end
  object Timer2: TTimer
    OnTimer = Timer2Timer
    Left = 32
    Top = 64
  end
end