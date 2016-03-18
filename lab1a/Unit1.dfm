object Form1: TForm1
  Left = 192
  Top = 125
  Width = 585
  Height = 480
  Caption = #1055#1088#1080#1083#1086#1078#1077#1085#1080#1077' '#8470'1'
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
    Left = 264
    Top = 40
    Width = 107
    Height = 16
    Caption = 'i scade in Edit1'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Label2: TLabel
    Left = 232
    Top = 16
    Width = 240
    Height = 16
    Caption = 'Incrementare Decrementare contor'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clRed
    Font.Height = -13
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Button1: TButton
    Left = 88
    Top = 40
    Width = 75
    Height = 25
    Caption = 'UP'
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 88
    Top = 104
    Width = 75
    Height = 25
    Caption = 'DOWN'
    TabOrder = 1
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 192
    Top = 136
    Width = 75
    Height = 25
    Caption = 'Exit'
    TabOrder = 2
    OnClick = Button3Click
  end
  object Edit1: TEdit
    Left = 152
    Top = 72
    Width = 89
    Height = 21
    TabOrder = 3
  end
end
