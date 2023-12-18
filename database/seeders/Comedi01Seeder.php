<?php

namespace Database\Seeders;

use App\Models\Comedi01;
use App\Models\Comedilp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Comedi01Seeder extends Seeder
{
    public $arcticulos = [
        "PELOTITAS CJX24BOLX110UNI",
        "MINISAURIOS CJX30DISX24UNI",
        "PIRATAS CJX30DISX24UNI",
        "CHOCOYOGURT CJX20BOLX24UNI",
        "BURBUJITAS CJX20BOLX24UNI",
        "K-CHIPUM CJX30BOLX120UNI",
        "KATABOOM CJX18DISX100UNI",
        "CENTRO LIQUIDO CJX16DISX40UNI",
        "CHICHISTE STD CJX30DISX100UNI",
        "BOOGIE ICE GDE STDCJX38DPX22UN",
        "BOOGIE ICE TAPER CJX6TAPX240UN",
        "GLOBO POP LED CJX12DISX20UNI",
        "GLOBOPOP STD CJX30BOLX24UNI",
        "GLOBOPOP FRESA CJX30BOLX24UNI",
        "GLOBOPOP TRI CJX30BOLX24UNI",
        "GLOBO PO MARACUYA CJX30BLX24UN",
        "ICCE STD CJX41DISX120UNI",
        "ADAMS CHICO CJX54DISX100UNI",
        "ADAMS GRANDE CJX50DISX20UNI",
        "ADAMS-CLORETCHICOSTDCJX54DPX100UN",
        "ADAMS-CLORETGRDE STDCJX50DPX20UN",
        "BUBBALOO STD CJX32DISX70UNI",
        "CHOCOSODA CJX32PACKX6UNI",
        "CLORETS CHICO CJX54DISX100UNI",
        "CLORETS GRANDE CJX50DISX20UNI",
        "CREAM CRACKER CJX24UNI",
        "CUACUA CJX6DISX30UNI",
        "DOÐA PEPA CJX6DISX30UNI",
        "HALLS AZUL CHICO CJX30BLX100UN",
        "HALLS BARRA AZUL CJX30DPX12UN",
        "HALLS BARRA MORA CJX30DPX12UN",
        "HALLS BARRA NEGRO CJX30DPX12UN",
        "HALLS BARRA ROJO CJX30DISX12UN",
        "HALLS BARRA STD CJX30DISX12UNI",
        "HALLS CHICO STD CJX30BLX100UN",
        "HALLS MORA CHICO CJX30BLX100UN",
        "HALLS NEGRO CHICOCJX30BLX100UN",
        "HALLS ROJO CHICO CJX30BLX100UN",
        "MINI CHIPS AHOI CJX8TIRX6UNID",
        "MINI CUA CUA CJX8TIRX6UNID",
        "PROMO RITZ TACO CJX64UNI",
        "RITZ CHICO CJX24PAKX6UNI",
        "SODA FIELD CJX36PACKX6UNI",
        "SPARKIES DISPLAY CJX24 BLX20UN",
        "MINI TRAVESURAS CJX9TIRASX6UN",
        "TRIDENT MENTA CJX30DISX18UNI",
        "TRIDENT MORA CJX30DISX18UNI",
        "TRIDENT STD  CJX30DISX18UNI",
        "TRIDENT TROPICAL CJX30DISX18UN",
        "TRIDENT ZANDIA CJX30DISX18UNI",
        "VAINILLA FIELD CJX24PACKX6UNI",
        "AGUA LIGHT CJX12PAKX6UNI",
        "CANCUN BIZCOCHO CJX14PAKX6UNI",
        "CAÐONAZO CJX8DISX24UNI",
        "CAÐONAZO EXTRA CJ X6DIS X12UNI",
        "CAR. LICOR CJX18BOLX100UNID",
        "CAR.BONAMI CJX18BOLX100UNI",
        "CARAMELO OH CJ X 13BLX100UN",
        "CAREZZA BON BON BOX CJ X 16UNI",
        "CARITAS CHAVO CJX16PAKX6UNI",
        "CEREAL BAR CHIPS CJX8DISX12UNI",
        "CEREAL BAR CHOCOLATECJX8DPX12UN",
        "CEREAL BAR GOLDENCJX8DPX12UN",
        "CHAPULIN FRESA CJX25BOLX25UNI",
        "CHAPULIN STD CJX25BOLX25UNI",
        "CHOCMAN CJX14PAKX6UNI",
        "CHOCOCHIPS CHOCOLATCJX12PKX6UN",
        "CHOCOCHIPS FIESTA CJX12PAKX6UN",
        "CHOCODONUTS CHOCOLATCJX14PKX6UN",
        "CHOCODONUTS CRUNCH CJX14PKX6UN",
        "CHOCOLATE CAREZZA CJX16DPX20UN",
        "COCOROCOS CJX10BOLX100UNI",
        "FRACC CHOCOLATE CJX12 PKX6UN",
        "FRACC CLASICO CJX12 PAK X 6UNI",
        "FRACC VAINILLA CJX12 PKX6UN",
        "FRUNA JIRAFA CJX25DISX40UNI",
        "FRUNA MASTICABLE CJX21DPX20UN",
        "FULL CHERRY CARAMELOCJX6DPX24UN",
        "FULL LIMON CARAMELO CJX6DPX24UN",
        "FULL MANDARINA CJX6DISX24UNI",
        "FULL MASTICABLE CJX6DISX20UNI",
        "GOMITAS FRUGELE CJX20BLX100UN",
        "GOMITAS OSITOS CJX16DISX12UNI",
        "GRETEL CHOCOLATE CJX16DISX6UNI",
        "GRETEL MANJAR CJX16DISX6UNI",
        "LIMON GAJOS CJX20BOLX100UNI",
        "MECANO CJX8DISX32UNI",
        "MENTITAS CARAMELO CJX6DPX24UN",
        "MENTITAS MASTICABLE CJX6DPX20UN",
        "NIK CHICO CHOCOLATE CJX12PKX6UN",
        "NIK CHICO FRESA CJX12PAKX6UNI",
        "NIK CHICO VAINILLA CJX12PKX6UN",
        "NIK FAMILIAR CHOCOLATCJX6PKX6UN",
        "NIK FAMILIAR FRESA CJX6PKX6UN",
        "NIK FAMILIAR VAINILL CJX6PKX6UN",
        "OBSESION CJX9DISX12UNI",
        "PALETA DIVERTILOY CJX10BLX50UN",
        "POKEKE CJX10DISX12UNI",
        "QUE LOCO CJX10DISX20UNI",
        "SODA LIGHT CJX12PAKX6UNI",
        "SUPER RELLENO CJX18BOLX100UNI",
        "TOFFI AMBROSOLISTD.CJX18BLX100UN",
        "TRIFRUNA CJX8BOLX70UNI",
        "TUYO CJX10DISX20UNI",
        "VAINIYA CJX20PACKX6UNI",
        "VIZZIO REGALO CHICO CJ X60DP",
        "VIZZIO REGALO GRANDE CJ X 12DP",
        "VIZZIO SOBRE CJX10DISX20UNI",
        "VIZZIO BON BON BOX CJX16 UNI",
        "VIZZIO CORAZON BOX CJ X 16UNI",
        "VIZZIO REGALO LATA CJ X 12UNI",
        "LECHE IDEAL CREMOSITA PLX24 UN",
        "LENTEJITAS CAJITA CJX24DPX20UN",
        "MIX CHINCHIN PUNS CJX24DPX12UN",
        "NESTLE BOMBONES STDCJX15BLX45UN",
        "PRINCESA CJX28DISX20UNI",
        "SUBLIME EXTREMO CJX24DISX12UNI",
        "SUBLIME CLASICO CJX27DISX24UNI",
        "SUBLIME SONRISA CJX24DISX20UNI",
        "TRIANGULO CJX24DISX22UNI",
        "AGUA NUBE CJX16UNI",
        "AGUA PEVESAL CJX10UNI",
        "ANIMALITOS 1/2 KILO BOLX4UNI",
        "ANIMALITOS BOLX10UNI",
        "ANIMALITOS CJ DE 3 KILOS",
        "BLACKOUT CHOCOLATE CJX32UNI",
        "BLACKOUT MENTA CJX32UNI",
        "BLOCKOUT AZUL GN CJ X 8 PACKS",
        "CHAMPION BOLX20UNI",
        "COCONUTS CJX25UNI",
        "CRACKNEL INTEGRAL CJX20UNI",
        "CRACKNEL ORIGINAL CJX20UNI",
        "FIDEO CABELLO DE ANGEL PAQX40UNI",
        "FIDEOSOPA CARACOL PAQX20UNIDX5KG",
        "FIDEOSOPA CODITO PAQX20UNIX5KG",
        "FIDEOSOPA RIGATON PQX20UNIDX5KG",
        "FIDEOSOPA TORNILLO PAQX20UNIDX5K",
        "FRUTA MIXTA CJX25UNI",
        "MUNICION CJX25UNI",
        "RELLENA CHOCO VAINILLACJX5PKX8UN",
        "RELLENAS CHOCOLATE CJX5PAKX8UN",
        "RELLENAS COCO CJX5PAKX8UNI",
        "RELLENAS DELEITE STD CJX5PKX8UN",
        "RELLENA FRESA APLICOTCJX5PKX8UN",
        "RELLENAS FRESA CJX5PAKX8UNI",
        "RELLENA MANZAN DURAZNOCJX5PKX8UN",
        "RELLENAS MENTA CJX5PAK8UNI",
        "RELLENA VAINILL MERMELACJX5PKX8UN",
        "RELLENITAS STD CJX5PAKX8UNI",
        "SODA FAMILIAR CJX20UNI",
        "SODA GOURMET CJX12UNI",
        "SODA SAN JORGE CJX4PACKX7UNI",
        "VAINILLA FAMILIAR CJX20UNI",
        "BUZZY TATTO CJX24DISX100UNI",
        "CASINO CHOCOLATE CJX8PAKX6UNI",
        "CASINO FRESA CJX8PACKX6UNI",
        "CASINO MENTA CJX8PAKX6UNI",
        "CHOMP CHOCOLATE CJX8PACKX6UNI",
        "CHOMP NARANJA CJX8PAKX6UNI",
        "INTEGRAL C/M CJX5PACKX9UNI",
        "INTEGRAL S/M CJX5PAKX9UNI",
        "MARGARITA CHICA CJX8PACKX6UNI",
        "MARGARITA FAM. CJX20UNI",
        "MARGARITA TACO CJX 20UNI",
        "SODA VICTORIA CJX36PACK6UNI",
        "TENTACIËN CHOCOLATE CJX8PAKX6UN",
        "TENTACIËN NARANJA CJX8PAKX6UNI",
        "TENTACIËN VAINILLA CJX8PAKX6UN",
        "TOFFE BIG BEN CJX18BOLX100UNI",
        "PEPSI 500 ML PAQX15BOT",
        "PEPSI JUMBO PAQX12BOT",
        "PEPSI 3 LITROS PAQ X 4 BOT",
        "CAFE MONTEREY CJX10 TIR X 24UN",
        "CHINCHIN 16GR CJX24 DISX24UNI",
        "CHINCHIN PALETON CJX12DISX20UN",
        "CHINCHIN PUNCH CJX24DIS X24UNI",
        "CHOCO.TAZACANELA-CLAVOCJX18DPX12UN",
        "COBERTURA CJX16 DISX 6UNI",
        "COCOA WINTER BOL X 60 UNX43GM",
        "COCOA WINTER BOLX30UNI X 150GM",
        "COCOA WINTER 10GR CJX12DISX50UNI",
        "COCOA WINTER GRA.21G CJX8DSX20UNI",
        "GALLETA CHINCHIN CJX10PKX6UN",
        "GALLIMELOW CHINCHIN CJX12DPX12UN",
        "MAXI MANI CJX20DISX24 UNI",
        "MINI CHINCHIN CJX16 BOL X 32UN",
        "MINI CHOCOAVENTURA CJX14TRX6UN",
        "MINI OLE OLE CJX12 TIR X 6UNI",
        "MINI PICARAS CLASICO CJX14TRX6UN",
        "MINI PICARAS EXT CJX14 TIRX6",
        "MUSTAFA CJX16 DIS X 28 UNI",
        "OLE OLE CJX15 BOLX50 UNI",
        "PICARAS CAPUCHINO CJX8 PKX6 UN",
        "PICARAS CHIPS CJX8 PAKX 6UNI",
        "PICARAS CJX8PAK 6UNI",
        "PICARAS EXTREMA CJX8 PAKX6UNI",
        "PICARAS FRESA CJX8 PAK X6UNI",
        "WINTER DE LECHE CJX35DISX30UNI",
        "FULL SANDIA CARAMELCJX6DPX24UN",
        "CARAMELO BIAGICAFE CJX16BLX100",
        "CARAMELO ARBOLITO CJX25BLX80UN",
        "CARAMELO BANDERITA CJX25BLX80U",
        "CHUPETIN PICOLINE CJX6TIRX10UN",
        "MEGA WAFER CHOCOLATE CJX16UNI",
        "MEGA WAFER FRESA CJX16UNI",
        "MEGA WAFER VAINILLA CJX16UNI",
        "GLOBOPOP YOGURT CJX30BOLX24UNI",
        "TOFFI MENTA CJX18BLX100UNI",
        "RELLENAS LUCUMA CJX5PAKX8UNI",
        "MAXI TOFFE CJX10BOLX50UNI",
        "FIDEOSOPA PLUMA PQX5KX20U",
        "PANETON POESIA CJX6 UNI",
        "MINI MAXI TOFFE CJX15BOLX110UN",
        "BONI.GALLIMELOW CHINCHIN X UNI",
        "WINTERS FLOW CJX12DISX6UNI",
        "WINTERS KREMANI CJX6DISX12UNI",
        "PANETON BOLSA CJX6UND",
        "PANETON BOLSA GIORGINO CJX6UND",
        "PANETON CAPILLA CJX6UND",
        "PANETON CASITA CJX6UND",
        "PANETON PANADERIA CJX6UND",
        "PANETON CAJA 900GR CJX6UND",
        "GRAN PANETON ROJO 1.5KG CJX3UN",
        "GRAN PANETON NEGRO 1.5KG CJX3U",
        "BONI.BLACKOUT GN",
        "ZUKO PIñA CJX8DISX12UNI",
        "GALLETA OREO CJX28PAK",
        "FILETE DE CABALLA CJX48LAT",
        "LOMITO DE ATUN CJX48LAT",
        "GITANA TROZOS DE ATUN CJX48UNID",
        "GRATED DE ATUN CJX48LATX48",
        "GITANA GRATED DE ATUN CJX48UNID",
        "VAINILLA GN CJX4PACKX10UNID",
        "BONI. EXHIBIDOR RITZ TACO",
        "BONI. ZUKO",
        "BONI.SODA CRACKER",
        "MINI POTE GELATINA",
        "TIRAS BOM MAGIC CJX8CARX200UNI",
        "TIKI TOK CJX18DISX20UNI",
        "CHUPETE HUEVO LED CJX16DISX24U",
        "CHUPETE MOLINO CJX16DISX24UNI",
        "ANCHOVETA GITANA CJX5OUNIDADES",
        "CHICLE DELY SOURS DISX20UNID",
        "CHIP AHOI CJX24PACKX6UNIDADES",
        "GLOBO POP TAPERX60UNIX6",
        "TATTO TAPERX150X12UNIDADES",
        "FIDESOPA CANUTORAYADO 5KLX20",
        "CHOCMAN EXTRA CJX8X6UNI",
        "OVALADA GITANA CJX24UNIDADES",
        "FRUNA BLOCKS CJX12BOLX20UNI",
        "FRAC MENTA CJX12PACKX6UNID",
        "GLOBO POP CHOCOLATEX30BOLX24UN",
        "OBLEA CHOCOLATEX32UNI",
        "OBLEA VAINILLAX32UNI",
        "OBLEA FRESAX32UNI",
        "OBLEA LUCUMAX32UNI",
        "SPORADE PQTEX12UNIDADES",
        "ANILLO CORAZON BARBIECJX18DX12",
        "CARITAS FIESTACJX12BOLX40UNI",
        "AGUA SAN JORGE 20L",
        "CHAMPSX10UNID",
        "ANIMALITOX20UNIDADES",
        "PICARA XL CJX12PACKX4UNI",
        "CHOCOFORMA CHINCHINX11BSX40UNI",
        "BONI.GLOBO POP",
        "BONI.RITZ TACO",
        "BONI.SODA V",
        "GLACITAS CHOCONIEVECJX8PACKX6U",
        "GLACITAS CHOCOLATECJX8PACKX6UN",
        "GLACITAS FRESACJX8PACKX6UN",
        "CHOCOBUMCJX8PACKX6UNI",
        "PANETON COSTA BOLSA CJX6UX800GR",
        "PANETON COSTA CAJA CJX6UNX800GR",
        "ANCHO.SALSA TOMATEX50UNI",
        "ZUKO MANGO CJX8DISX12UNI",
        "MINI RELLENA COCO CJX8BOLX50UN",
        "MINI RELLENA FRES CJX8BOLX50UN",
        "MINI RELLEN CHOCO CJX8BOLX50UN",
        "GLACITAS TOFFE CJX8PACX6UNID",
        "OREO TACO CJX30UNIDADES",
        "HALLS BARRA FRUTIMIXCJX30X12UN",
        "TRIDENT FRESA CJX30X18UNIDA",
        "GITANA FILET DE CABALLA CJX24UNID",
        "CAFE MONTERREY CJX4DISX50UNID",
        "SODA TACO COSTA CJX21UNID",
        "AGUA TACO COSTA CJX21UNID",
        "VIZZIO BITTER ESTUCHE CJX12UNI",
        "ZUKO MANZANA CJX8DISX12UNID",
        "ENGLANDTOFFEDECAFECJX18BOLX100",
        "GOMAS FLIPYS CJX16DISX12UNID",
        "VIZZIO BITTER CHICO CJX60UNID",
        "MILO 400GR CJX12UNIDADES",
        "REGALO CHOCODONUS CJX16UNID",
        "TODINOPOSTREORIGINALCJX6UNX500",
        "TODINOPOSTREMANJARCJX6UNIX500G",
        "GIT.PORTOLACHICACJX48UNIX130GR",
        "GITGRATEDJURELTALLCJX24UNIX425",
        "GIT FILETDATUNACEITVEG CJX48UN",
        "GIT FILETDATUNAGUAYSAL CJX48UN",
        "BONI.GIT MERMELADA VASO",
        "ARROZ COSTEÑO BOLX20UNIDX3/4KG",
        "MINICACHORROS CJX30DSP",
        "BONI.WAFER GN",
        "GUARANA 450ML PAQX15UNID",
        "PASCUALINO CJX6BOLX800GR",
        "GUARANA 3LT PAQ.X4 UNIDADES",
        "PEPSI 1.5LT PAQX6UNID",
        "AGUA SAN JORGE PAQX15UNIDADES",
        "CORONITA GALLETA CJX28X6UNIDAD",
        "CORONITA TACO CJX30UNIDADES",
        "NESCAFE KIRMA PLANCHX12UNX190GR",
        "CHARADA TACO CJX30UNIDADES",
        "CHARADA PAQUETE CJX28PAQX6UNID",
        "BONI.MERMELADA SACHET GITANA",
        "BONI.SODA GOURMET",
        "CARAMELO CHICHA CJX20BOLX100UN",
        "CARAMELO FRUTINA CJX28X60UNIDA",
        "CHIQUI GUARANITA PQTX15UNIDADE",
        "OREO GRANDE CJX18PAKX6UNI",
        "MUNICION CJX6UNIX500GR",
        "GALLETA LATA COSTA CJX18UNI",
        "MAYONESA DOYPACK CJX24X100CC",
        "KETCHUP DOYPACK CJX24X100G",
        "MOSTAZA DOYPACK CJX24X100G",
        "CREMA DE AJI DOYPACK CJX24X100",
        "PASA BORRACHA CJX20BOLX24UNID",
        "MINIGLACITAS TOFFE CJX8TIRX6UN",
        "CALLETA SURTIDA CJX6UNIDADES",
        "RELLENAS CHOCOFRESA CJX5PAQX8U",
        "CHINCHIN SORPRESA CJX12BOLSAS",
        "GOMITA AMBROLIPTOS CJX20BOL",
        "AMBROSIA GRANEL CJX20BOL",
        "OSITO GRANEL CJX20BOL",
        "GRANUTS ORIENTAL CJX12TIRX6UNI",
        "GRANUTS MIX ARANDAN CJX12TIRX6",
        "CONCURSO MENSUAL",
        "GALLETA DUCALES FAM CJX24UNID",
        "WAFER WINTER`S CJX16DISX8UNID",
        "WINTER CHIPS CJX12UNIX500GR",
        "CHOCOLISTO TIRAS CJX48X6UNID",
        "COLCAFE GRANULAD.CJX12UNX170GR",
        "PROMO 1CHIN/2PIC.+0.02PIC.CJX1",
        "PRO 1WAFER/2PIC.+0.02PIC.CJX1",
        "PROM.COCOA WINTER 1 UNID",
        "PROM.1CHIN+2PIC+0.02CHIN",
        "BONI.CHOCOLISTO TIRAX6UNID",
        "CHOCMAN EXTRA BLACK CJX14X6UNI",
        "BONI.WINTER CHIPS 500GR",
        "BONI.GANCHERA CHOCOLISTO",
        "HUEVITO TAPER C/E CJX6TX180UNI",
        "SODA CHICA S.J CJX4PAQX10UNID",
        "PROMO PICARAS CHOC.CJX8PAQ",
        "PROMO CHIN CHIN CJX24",
        "ZUKO CHICHA CJX8DISX12UNIX15GR",
        "ZUKO NARANJA CJX8DISX12UNIX15G",
        "ZUKO MARACUYA CJX8DISX12UNIX15",
        "ZUKO DURAZNO CJX8DISX12UNIX15G",
        "ZUKO LIMONADA CJX8DISX12UNIX15",
        "ZUKO FRESA CJX8DISX12UNIX15GR",
        "ZUKO EMOLIENTE CJX8DISX12UNID",
        "CHINCHIN PIÑATERA CJX8BOLX610G",
        "FOCHIS PASAS CJX18DISX12UNX28G",
        "DUCALES CHICO CJX24PAQX6UNID",
        "TOFFE D DLEITE CJX15BOLX110UNI",
        "MINI MERENQUITOS CJX37UNIX60GR",
        "BONI.COLCAFE X 170GR",
        "GIT.ENT.DESARDINA CJX24UNIX425",
        "PROMS.DEPROD.ABR.21.OLEOLE,PIC",
        "PROMOC.DEPROD.MAY21 PICARA OLE",
        "COCOA W.POTE CJX24UNIX200GR",
        "CHOCOLISTO POTE CJX12UNIX300GR",
        "CHOC.FINOS CJX56DISX80UNIX3.6G",
        "CHINCHINSOBRE 32GR CJX24X16UN",
        "BONI. CURACAO",
        "BONI.COCOA WINTER`S 45GR",
        "BONI.COCOA WINTER'S 160GR",
        "BONI.COCOA WINTER'S 23GR",
        "CHINCHIN+1LAP+1UNI CJX24X24UNI",
        "ECCO CEBADA PLX24UNIDX170GR",
        "COBERTURA LECHE CJX16DISX600GR",
        "COBERTURA BLANCA CJX16DISX600G",
        "COMBO 3 PICARAS+2UNID CLASICA",
        "BONI.1PAQ PICARAS CLASICA",
        "BONI.COCOA 11 GR 1DSP",
        "BONI.DUCALES",
        "PATICREMA CJX24DISX8UNIX19GR",
        "CHOCOLISTO 1.5KG CJX8UNID",
        "SERVICIO MERCHANDISING JUNIO",
        "BONI.CHALINA WINTER'S",
        "1WAFER+2PIC+8UNI.PIC+1BOL+1VOL",
        "CHINCHIN16GR 2CJ+3DS+1BL.OLE",
        "CHINCHIN16GR 5CJ+8DS+3BL.OLE",
        "CHINCHIN16GR 12CJ+1CJ+4BOL.OLE",
        "CHOCOLISTO 1.5KG 2BL+1POTE300G",
        "COCOA23GR 1DS+5UNI.45GR+1L+1AT",
        "COCOA 10GR 1DIS+2UNID",
        "COCOA 10GR 24DIS+1DIS",
        "COBERT. BITTER 1CJ+1DIS X600GR",
        "PICARAS 2PACK+1UNID",
        "PICARAS 4CJ+2PACK+1DUCAL.TACO",
        "PICARAS 10CJ+6PACK+3DUCAL.TACO",
        "PICARAS 30CJ+3CJ+5 DUCAL.TACO",
        "MILO 2.5KG CJX4BOLSAS",
        "NESCAFE 500GR CJX6 UNIDADES",
        "CLUB SOCIAL CJX32PACKX6UNX26GR",
        "CHOC.TAZA REAL CJX12DISX10UNID",
        "RELLENITAS CHOC.TACO CJX24UNID",
        "RELLENITAS FRESA TACO CJX24UNI",
        "RELLENITAS COCO TACO CJX24UNID",
        "COCOA 26.5GR 1DIS+1UNID",
        "COCOA 26.5GR 20DIS+1DIS",
        "COCOA 26.5GR 1DIS+2UNID",
        "COCOA 26.5GR 1DIS+1LANYARD+1AT",
        "COCOA 21GR 24DIS+1DIS",
        "COCOA 150GR 30 UNID+1 UNID",
        "BONI.MANDIL CHIN CHIN",
        "COCOA 160GR 30UNID+3UNID",
        "COCOA 45GR 60UNID+3UNID",
        "COCOA 45GR 12UNID+1UNID",
        "COCOA 45GR 12UNID+1UNID",
        "PROMO PIC.CLASICA 2PACK",
        "PROMO PIC.EXTREMA 2PACK",
        "PROMO PIC.FRESA 2PACK",
        "PANETON CAJA W.CJX6UNIX900GR",
        "PANETON BOLSA W.CJX6UNIDX900GR",
        "PANETON CHOCOCHISPAS CJX6UNI",
        "PICARAS 2CJ+1PACK",
        "MONEDITAS CJX32BOLX110UNID",
        "COLCAFE CLAS.CHICO CJX24UNX50GR",
        "CHIN CHIN PUNCH 1DIS+1UNI",
        "BONI.PANETON W.BOLSA 900GR",
        "CARITASCHAVO FRESA CJX16PAQX6U",
        "BONI.1 DISPLAY CHINCHIN 16G",
        "BONI. AGUA SAN JORGE",
        "ZUKO 15GR 16CJ+1CJ",
        "COCOA 23GR 1DIS+1UNI.CHOC.TAZA",
        "PANETON W.BOL 12UNI+1UNI 900GR",
        "PNTON W.BOL.24U+2U+12U.CO.11GR",
        "PNTON W.BOL 24UN+2UN+8UN.PIC",
        "CHINCHIN 16GR 1DIS+1UNID",
        "COCOA 11GR 2DISP+1TIR.CHOCOLIS",
        "COCOA 150GR 60UNID+3UNI",
        "WINTER DOLCE DLEITECJX35DSX30UN",
        "GRANEL CORDILLERA CAPUC CJX9BS",
        "GRANEL MINI CHINCHIN CJX9BSX1K",
        "GRANEL CHINCHIN CJX9BSX1KL GM",
        "HUEVO ENVUELTOCJX32BSX55UNI",
        "PNTN W.CAJA 12UNI+1UNI 900GR",
        "BARBI TUBO CJX20DISPX15UNI",
        "ATARALENGUA CJX20DISPX15UNI",
        "DIAMANTE ANILLOCJX12DISPX12UNI",
        "CHINCHIN 16GR 3CAJAS+2DISPLAY",
        "PICARAS CLASIC 20CAJAS+1CAJA",
        "PICARAS CLASIC 3PACK+2UNID",
        "CHOCOLISTO TIRAX6UNI + 1UNI",
        "COCOA 21GR 1DIS + 1UNI",
        "COCOA 45GR 20UNI + 1UNI",
        "CHOCOTAZACANELA-CLAVO 1DIS+1UN",
        "COCOA 10GR 1DIS + 1UNI",
        "COCOA 11GR 1DIS+1UNI CHOCOTAZA",
        "PNTON W.BS 12UN+1UN+6UN CO.11G",
        "PNTON W.BS 12UN+1UN+4UNPICARCL",
        "CHOCOTAZA REAL 1DS+1UNTAZACANE",
        "WINTER CHIPS 12UNI+1UNICOBERTU",
        "PNTON W.CJ 12UN+1UN+4UNPICARCL",
        "PNTON W.CJ 12U+1UBS+6UCOCOA11G",
        "BONI.CHOC.TAZA CANELA-CLAVO",
        "PNTON W.BS 1UN+1UNCHOC.TAZACLASICO",
        "CARAMELO FIESTA CJX9BOL",
        "PEPSI 2LT PQTX6UNI",
        "SALADITAS SAN JORGE CJX5PKX6UN",
        "SABROCHAS SAN JORGE CJX5PKX6UN",
        "BLOCKOUT MENTA GN CJX8PCKX6UNI",
        "NIK CHICO AVELLANA CJX12PKX6UN",
        "PANETON W.CJ 6UN + 1UN BS",
        "PANETON W.BS 6UN + 1UN BS",
        "FIERAS CJX30DISX24UNI",
        "MINI GOMAS AMBROSITO CJX12UNI",
        "PEPSI 335ML PQTX15UNI",
        "CONCORDIA PIÑA 335ML PQTX15UNI",
        "COCOA 160GR 4UNI+2UNCOCOA11G",
        "BONI.LANYER",
        "GALLETA DUCALES FAM 1UN+1UN UNTADOR",
        "CHOCOLATE TAZA CLASICO",
        "GALLETA NOEL BOLSA 150GR CJX12BS",
        "GALLETA NOEL BOLSA 220GR CJX12BS",
        "GALLETA NOEL PLEGADIZA 215GR CJX24U",
        "EXIBIDOR NOEL BOLSA220GRX36UNI",
        "PNTN W.CJ 1UN+1UNCHOCTAZACLASICO",
        "SUBLIME BLANCO CJX24DPX20UN",
        "MINI MOROCHASCJX8TIRX8UNI",
        "MAYONESA 200GR DOYPACK CJX12UN",
        "MINI GOMAS FLIPY CJX12UNI",
        "REBATE ANUAL",
        "COCOA 160GR 4UN+1UN ZUKO",
        "COCOA 150GR 60UN+2UNI",
        "CHOCOLISTO 200GR X18UNI",
        "MINI CORDILLERA CJX9UNX1K",
        "COCOA WINTER 380GR CJX12UN",
        "GRANUT ORIENTAL 600GR CJX8UN",
        "BONI.VOLT X300ML",
        "MINI OLE OLE CJX60UNI",
        "COCOA 23GR 24DIS+1DIS 11GR",
        "COCOA 150GR 60UNI+6UNI 43GR",
        "SELLO ROJO BOLX20UNIX213GR",
        "COCONUTS CJX6UNIX500GR",
        "FRUTAMIXTA CJX6UNIX500GR",
        "VAINILLA GOURMET GRANELCJX10PK",
        "DUCALES FAM 1UNI +1UNI MERMELA",
        "COCOA 23GR+1UNI CHINCHIN 16GR",
        "COCOA 11GR+23GR +3UNCHINCHIN16G",
        "COCOA 160GR 3UNI +2CHINCHIN16G",
        "CHOCOPALETON CJX18DSP",
        "BLOCKOUT COCO GN CJX8PCKX6UNI",
        "COCOA 160GR 60UNI +5UNCOCOA 45G",
        "COCOA 23GR 1UN +1UNCHICHIN32GR",
        "DUCALES FAM 1UN +1UN COCOA160G",
        "MERMELADA POTE 320GR CJ X12UNI",
        "CHOCOLISTO POTE 1KG PQTX6UNI",
        "DUCALES EXTRAFAMILIAR CJX12UNI",
        "MERENGUITOS FAMILIAR CJX12UNI",
        "COCOA W.REPOSTERIA CJX6UNIX1KG",
        "COCOA 23GR 1DP +1UN ZUKO FR/MA",
        "COCOA 23GR 1DP +2UNI COCOA11GR",
        "DUCALES FAM 2UN+1PK PIC+2UNPIC",
        "DUCALES FAM.3UN+1PK PIC+4UNPIC",
        "BONI. TASA WINTER",
        "BONI.MERMELADA A1",
        "BONI.CHOCOLATE-TAZA CLASICO WIN",
        "BONI.1PACK SABROCHAS",
        "BONI.TERMO WINTER",
        "ROLLO MOGUL CJX12DSPX12UNI",
        "BON O BON DSP CJX12DISX30UNI",
        "CARAMELO CHICHA ARCOR CJX20BX100U",
        "CARAMELO LIMON ARCOR CJX20BX100U",
        "CARAMELO MENTACHOC.ARCORCJX12BX73U",
        "FRUTAS MASTICABLES CJX12BX412GR",
        "GOLPE LASICO CJX6DISX24UNI",
        "SAPITO CLASICO CJX9DSX180GR",
        "SAPITO MANI WEREP CJX8BLX270GR",
        "MINI SAPITO CJX8BSX50UNI",
        "MINIOBLEA BONOBON CJX12BSX288G",
        "MINIGOLPE CJX12BOLX288GR",
        "REGALO CORAZON MORA CJX12DSX10",
        "GROSSO STD CJX24BLX325GR",
        "GOLPE MAXX CJX12DISX12UNI",
        "GOMAS CHAVO CJX12DSX100UNI",
        "COCOA 160GR 3UN +2UN COCOA 11G",
        "COCOA 11G 1DS+1DS 23G+5UN 11GR",
        "COCOA 23GR 2DS+ 4UN COCOA11GR",
        "DUCAL.FAM.3UN+1PK PIC +2UN PIC",
        "DUCAL.FAM.3UN+2PK PIC +3UN PIC",
        "DUCAL.FAM.3UN+3PK PIC +4UN PIC",
        "STD FRUTALES MISKI CJX16BOLX110UN",
        "MASTICABLE FRUTAS MISKI CJX12BX100U",
        "PICARAS CJX8PAKX8UNI",
        "ROLLO MOGUL EXTREME CJX12DX12U",
        "PUNCH 1DS+1PK PICA+2UNMAXIMANI",
        "CHIN 16G 1DS+1PKPICA+2UNMAXIMA",
        "BONI.SAPITO WEREP",
        "PRIVILEGIO BONBON CHICO CJX6BX",
        "PICARAS MENTA CJX30PCK X6UNI",
        "BONI.EXHIBIDOR ZUKO",
        "SODAX28PK 4CJ +1PCK",
        "CRACKNEL ORIG. 1CJ+3UN SODA SJ",
        "COCOA 23GR 1DSP+2UN COCOA 11GR",
        "COCOA 23G 1DSP+3UNCHOCOLIS.20GR",
        "COCOA 11G 1DSP+3UN.CHOCOLIS.20GR",
        "CHIN 16G+1PK PIC.MENTA+2UNCHIN",
        "PUNCH 1DS+1PKPIC.MENTA+2UNPUNC",
        "NIKOLO XL LUCUMA CJX12DSPX12UNI",
        "VIZZIO BARRA CJX12DSPX20UNI",
        "BONI.GOLPE FRESA",
        "CHIN16G 1DS+1PK P.CHIP+2UMAXIM",
        "CHIN16GR 1DS+1PK P.EXTR+2UMAXI",
        "CHIN16G 1DS+1PK P.FRESA+2UMAXI",
        "PUNCH 1DS+1PK P.CHIP+2UMAXIMAN",
        "PUNCH 1DS+1PK P.EXTR+2UMAXIMAN",
        "PUNCH 1DS+1PK P.FRESA+2UMAXIMA",
        "PUNCH 1DS+1PK P.CHOCO+2UMAXIMA",
        "BONI.LAPICERO ZUKO",
        "BONI.EXHIBIDOR GLOBOPOP",
        "SUBLIME DUO CJX21DSX30UN",
        "MOROCHAS CJX22PAKX12UNI",
        "SUBLIME STICK CJX28DSX30UNI",
        "GRANUT ORIEN.1T+1T ARANDA+EXHI",
        "CHIN 16G 1D+1BS.OLE+2U.CHIN16G",
        "PUNCH 1DS+1BS.OLE+2UN.PUNCH",
        "DUCAL.FAM.2U+1D.CHIN16G+2U.CHI",
        "DUCAL.FAM.3U+1D.CHIN16G+4U.CHI",
        "ARROZ GITANA 3/4 BOLX20UNI",
        "DURAZNO GITANA CJX12UNI",
        "MINI GUSANO CLASICO CJX12UX90G",
        "MINI GUSANO ACIDO CJX12UNX90G",
        "COCOA 11GR 1DS+4UN",
        "COCOA 23GR 1DS +3UN 11GR",
        "COCOA 160GR 30UNI +2UN 160GR",
        "COCOA 160GR 6UN+2UN COCOA 11GR",
        "COCOA 11GR 12DSP +1DSP",
        "COCOA 23GR 12DSP +1DSP",
        "COCOA 23GR 12DSP +1DSP C.11GR",
        "COCOA 160GR 60UNI +1DSP C.11GR",
        "MINI OLE OLE MANI CJX12TRX6UNI",
        "COCOA 160GR 6UN +4UN C.11GR",
        "GALLETA TEJANA CJX8BSX480GR",
        "PNTN BS 1UN+1U.PIC+1U.MAXIMANI",
        "PNTN BS.1U+1U.OLEMANI+1U.MAXIM",
        "MINI OLE MANI 1T+1B.OLE+1U.PIC",
        "MINI OLE MANI 2T+1B.OLE+3U.PIC",
        "COCOA 10GR 1DS+1UN.CHIN.16GR",
        "COCOA 10GR 1DS+3UN.CHOCOLISTO",
        "COCOA 160GR 3UN+3UN.CHIN.16GR",
        "COCOA POTE 200G 2UN+2U.CHIN.16",
        "COCOA 10GR 24DS+3U.CHOCOLI.POTE",
        "COCOA 45GR 60UN+3UN.COCOA 45GR",
        "COCOA 160GR 60UN+2U.CHOCOL.POT",
        "TUYO PAK CJX16PCKX6UNI",
        "NIKOLO XL CJX12DSX12UN",
        "CARITAS BAñADO CJX16PKX6UNI",
        "NIK BAñADO CJX12PKX6UNI",
        "CHINCHIN CHOCOPOP CJX8DSX10UNI",
        "FILETE CABALLA JOGIPEZ CJX48UN",
        "CHINCHIN GRANEL CJX10BOLX750GR",
        "MINI COSTA MINIONS CJX48UNI",
        "MINI CHOCMAN CJX12BLSX20UNI",
        "GALLETA DUETO CJX6PCKX6UNI",
        "CHINCHIN 16GR 1DSP+1U.CHOCOPOP",
        "COCOA 23GR 1DSP +1UN COCOA.11G",
        "COCOA 23G 1D+1D.11G+1U.CHO.TAZ",
        "COCOA 21GR 24DSP +1DSP CHOC.TA",
        "COCOA 160GR 60UN +1DSP CHOC.TA",
        "TIKI TOK CJX24DSPX20UNI DELICO",
        "GOMA TUBOS ACIDOS STD CJX8DX24",
        "CHUPETIN DELICOR STD CJX20DX30",
        "HUEVO MONSTER CHOC.CJX6DSPX24U",
        "DEDOS LOKOS CJX20DSPX30UN DELI",
        "GELATINA TAPER CJX6TAPX100UN",
        "YELICOLAS BOTELLA CJX20DSPX30U",
        "STICK TATTO CJX24DSPX30UN DELI",
        "CHUPETE MOLINO DELI.CJX20DX24U",
        "GELATINA GRANEL CJX410UNI DELI",
        "HUEVO TURBO CAR CJX6DSX24UN",
        "HUEVO PRINCESA CJX6DPX24U.DELI",
        "FULL LIMON BOLSA CJX28BSX100UN",
        "PANETON W.BS 900G+3UN.COCOA10G",
        "BLACKOUT EXTREMO CJX30UNIX114G",
        "LALO LED DELICOR CJX20DSPX30UN",
        "DELYBURGER DELICOR CJX20DSX30U",
        "HUEVO LED DELICOR CJX20DSX30UN",
        "BONI.VINAGRE RICASSA 500ML",
        "BONI.BON O BON FRESA",
        "CHIN.PUNCH 1DSP +1UN.CHOCOPOP",
        "COCOA 160GR 6UN +1UN.COCOA 21G",
        "TOP LINE INKA CJX12DSPX12UN",
        "TOP LINE CHICHA CJX12DSPX20UN",
        "PRIVILEGIO XL CJX6BOL",
        "STRAWBERRY CANDI CJX12BOLX100U",
        "ALKA STD CJX20BOLX100UNI",
        "DURAZNOS GRAN FRUTA CJX12LT",
        "CHINCHIN CHOCOPOP 1DSP+1UNI",
        "GELATINA TAPER BOY CJX6TPX100U",
        "CHOCOLISTO POTE 300G 6UNI +1UN",
        "BONI.BON O BON CORAZON",
        "MINI GLACITAS CHOC.CJX8TIRX6UN",
        "MINI CHOCOBUM CJX8TIRX6UNIDADE",
        "MINI OLE MANI 1T+1B.OLE+1U.CHO",
        "MINI OLE MANI 2T+1B.OLE+3U.CHO",
        "ZUKO EXHIBIDOR PI.CHI.NAR.MAR",
        "COCOA WINTER 21GR 1DIS+1UNIDAD",
        "GATORADE TROPICAL PAQX12UNIDAD",
        "BONI.HUEVO CON ENVOLTURA",
        "PICARAFRESACORAZON CJX30PACKX6",
        "CHOC.REALGRANULADOCJX12UNX200G",
        "CHOCOLISTO 1KG 12POT +1POT.1KG",
        "PICARAS CLASICA.2PACK +2UNID",
        "MINI OLE MANI 1T+1B.OLE+1U.OLE",
        "MINI OLE MANI 2T+1B.OLE+2U.OLE",
        "BONI.NIK BAÑADO",
        "GRANUTS HABAS MIX CJX12TIRX6UN",
        "PICARA CHIP 1PACK+1UN.PIC.",
        "PICARA EXTREMA 1PCK+1U.PIC.",
        "PICARA FRESA 1PACK+1UN.PIC.",
        "PICARAFRESACORAZON 1PK+1U.PIC.",
        "MINI OLE MANI 1TR+2UN.OLE MANI",
        "MINI OLE MANI 2TR+4UN.OLE MANI",
        "PICARAS CLASICA 1PACK +1UN.PIC",
        "PICARAS CLASICA 6CJ +1PCK.PIC",
        "PICARAS CHIPS CJX30PACKX6UNI",
        "WAFER GN CHICO CHOCOLATE CJX5P",
        "WAFER GN CHICO FRESA CJX5PK",
        "WAFER GN CHICO VAINILLA CJX5PK",
        "CASINO PIE LIMON CJX8PKX6UN",
        "CHINCHIN CHOCOPOP 1DSP +2UNI",
        "CHINCHIN 16GR 1DSP+2U.CHOCOPOP",
        "OLE OLE 2BLS +2UN.PIC.SABORES",
        "HUEVO BABY PETS CJX6DSX24UN",
        "HUEVO BABY DINO CJX6DPX24UN",
        "BONBON BUM MARACUYA CJX15BSX24",
        "PISTOLITAS DELIC.CJX20DSPX30UN",
        "STICK VOLADOR CJX24DSPX24UNI",
        "DELY ENCENDEDOR CJX20DSPX30UNI",
        "CHAPLIN TRADICIONAL CJX40UNI",
        "PEPSI LATA CJX24UNIX330ML",
        "COCACOLA LATA VAINILLA CJX24UN",
        "COCACOLA LATA CHERRY CJX24UNI",
        "FANTA LATA PIñA CJX24UNI",
        "FANTA LATA DURAZNO CJX24UNI",
        "DR.PPPER CHERRY CJX24UNIX355ML",
        "RITZ LATA PIñA CJX24UNIX355ML",
        "RITZ LATA COLA CJX24UNIX355ML",
        "RITZ LATA FRESA CJX24UNIX355ML",
        "RITZ LATA DURAZNO CJX24UNX355M",
        "RITZ LATA CHERRY CJX24UNIX355M",
        "COCACOLA LATA CLASICA CJX24UN",
        "COCA COLA LIMA EU CJX24UNI",
        "FANTA LATA FRESA CJX24UN",
        "FANTA LATA EXOTIC CJX24UN",
        "FANTA LATA LIMON EU CJX24UX330",
        "SCHWPPES LATA MOJITOS CJX24UNI",
        "SCHWPPES LATA BITTERLIMO CJX24",
        "SCHWPPES LATA INDIAN CJX24UNI",
        "SCHWPPES LATA CITRUS CJX24UNI",
        "TOALLA VEESPER MORADA PQTX24PU",
        "MOGUL CONITOS CJX12DISX12UNI",
        "ALKA MINI MENTOL CJX5DISX20UNI",
        "ALKA MINI MENTA CJX5DISX20UNI",
        "ALKA MINI LIMON CJX5DISX20UNI",
        "DTG ORION LAVANDA BOLX60UX150G",
        "DTG ORION ROSAS BOLX60UX150G",
        "DTG ORION LIMON BOLX60UX150G",
        "DTG ORION FLORAL BOLX60UX150G",
        "DTG ORION LIMON BOLX10UNX850G",
        "DTG ORION FLORAL BOLX10UNX850G",
        "DTG ORION ROSAS BOLX10UNX850G",
        "JABON CORONA FRESA CJX72UNI",
        "JABON CORONA UVA CJX72UNI",
        "JABON CORONA MANGO CJX72UNI",
        "JABON CORONA NARANJA CJX72UNI",
        "JABON CORONA MANZANA CJX72UNI",
        "JABON CORONA LIMON CJX72UNI",
        "JABON CORONA MANGO CJX72UNI",
        "LIMPIATODO ORION STD CJX24UNI",
        "FOSFORO RAYO CJX10DISX100UNI",
        "SUPER GLUE YOMAR CJX72PLAX12UN",
        "PAÑOS HAPPY KIDS CJX16UX120PÑ",
        "PIC.CLASC 1PK+1PK PIC.FRE+1U.P",
        "PIC.CLASC 1PK+1PK PIC.EXT+1U.P",
        "PIC.CLASC 1PK+1PK PC.CHIP+1U.P",
        "DUCALES FAM 3PK+1UN.PIC.SABORE",
        "OLE OLE 1BOL +1UNI.PIC.SABORES",
        "CHIN CHIN 16GR 1DSP +2UNI",
        "CHIN.PUNCH 1DSP +1UN.CHIN.16GR",
        "DUCALES FAMILIAR 2UNI",
        "COMBO GRANUT STD+2U.HABAS+CABE",
        "TAPS DINOSAURIO CJX32BOLX110UN",
        "TAPS CACHORROS CJX32BOLX110UN",
        "TAPS FIERAS CJX32BOLX110UN",
        "TAPS PIRATAS CJX32BOLX110UN",
        "MONEDA AZUL DE 1SOL CJX40BOLSAS",
        "MONEDA PIRATA AZUL 1SOL CJX40BOLSAS",
        "MONEDA DORADAS 1SOL CJX40BOLSA",
        "BONI.DINOSAURIOS",
        "CHOCOYOGURT GRANEL KILO CJX12B",
        "BURBUJITAS GRANEL KILO CJX14B",
        "BURBUJOTAS GRANEL KILO CJX12B",
        "MANI CON CHOCOLATE CJX18BOL",
        "RITZ CON QUESO CJX20PAKX6UNI",
        "FILETE CABALLA EL CHAMO CJX48U",
        "CHOCOLISTO POTE 300G 1UNI+3SOB",
        "DUCALES FAM 1UNI+1UNI.PIC.",
        "1KAT+1CHI+1ATA+1GLB.STD+1LECHE",
        "PIC.CLAS.6CJ+1PK.EXTRE+2UN.PIC",
        "DTG ORION FLORAL BOLX30UNX400G",
        "DTG ORION ROSAS  BOLX30UNX400G",
        "CANDY TOLA CJX20DISX30UNI",
        "DELY PIZZA CJX20DISX30UNI",
        "PAPI TATAS CJX20DISX30UNI",
        "CHUPETIN OREO LED CJX20DISX30U",
        "MONEDAS TAPS STD CJX32BOLX110U",
        "CHOC.REALGRANULADO COMBO 2X1",
        "GRISSLY ACIDAS SANDIA CJX24UNI",
        "GRISSLY SPLASH ACIDA CJX36UNI",
        "MASMELOS OSOS CJX12BOLX50UNI",
        "MASMELOS UNICORNIO CJX12BLX50U",
        "PICARAS CLASICA CJX20PAKX8UNI",
        "BONI.GOMAS MOGUL",
        "NOCAUT CJX12DISX6UNI",
        "BONI.OLE OLE",
        "OLE OLE 3CJ +1BOL.OLEOLE",
        "MINI CHINCHIN 3CJ +1BOL.OLEOLE",
        "CASINO BLACK MENTA CJX8PCKX6UN",
        "FINI GOMAS ARITOS CJX12UNIX90GR",
        "FINI GOMAS BANANA CJX12UNIX90G",
        "FINI GOMAS BESO CJX12UNIX90GR",
        "FINI GOMAS DENTADURA CJX12UNIX",
        "FINI GOMAS FINIBURGER CJX12UNI",
        "FINI GOMAS GUSANO CJX12UNIX90G",
        "FINI GOMAS MORA CJX12UNIX90GR",
        "FINI GOMAS GUSANO ACIDO CJX12U",
        "FINI GOMAS OSITO CJX12UNIX90GR",
        "FINITUBES COLORES ACIDO CJX12U",
        "FINITUBES UVA ACIDA CJX12UNX90",
        "FINITUBES FRESA ACIDA CJX12UNI",
        "FINITUBES TUTIFRUTI ACID CJX12",
        "FINI MASHM BLANCO CJX12BOLX80G",
        "FINI MASHM FLOR CJX12BOLX80GR",
        "FINI MASHM TUBO CJX12BOLX80GR",
        "FINI MASHM TRENSA CJX12BOLX80G",
        "FINI MASHM CORAZON CJX12BOLX80",
        "FINICHICLE ENSALADAFRUTA CJX12",
        "FINICHICLE ZANDIA CJX12UNIX80G",
        "FINICHICLE DINOSAURIO CJX12UNI",
        "FINIDISPLEY BANANA CJX24DSX12U",
        "FINIDISPLEY FRESA CJX24DSX12UN",
        "FINIDISPLEY GUSANO ACID CJX24D",
        "FINIDISPLEY MORA CJX24DSX12UN",
        "FINIDISPLEY GUSANO CJX24DSX12U",
        "FINIDISPLEY DENTADURA CJX24DSX",
        "FINI REGALIZ COLORES CJX6DSX24",
        "FINI REGALIZ FRESA ACID CJX6DS",
        "FINI GOMA LITTLE MIX CJX16UNI",
        "FINI ROLLER COLORES CJX8DSX40U",
        "FINI ROLLER SANDIA CJX8DSX40U",
        "BONI.FINI GOMAS 90GR",
        "BONI.FINI GOMAS 80GR",
        "BONI.FINI EXHIBIDOR CARTONFINI",
        "CHINCHIN PUNCH 1DSP +2UNI",
        "DUCALES FAM.2UNI +1UNI.PIC.SAB",
        "CHOCOPOP 1DP+2U.CHIN16G+1U.PIC",
        "CHINCHIN 16GR 1DSP+1UN.PIC.SAB",
        "OLE OLE 1BOL +5UNI",
        "OLEMANI 1T+1B.OLE+2U.PI+5U.OLE",
        "GRANUTS ARANDA 1T+1T.ORIENT+2U",
        "GRANUTS ORIENTAL 2TR+2U.GRANUT",
        "GRANUTS ARANDAMIX 2TR+2U.GRANU",
        "OLE OLE 24 CJ +1CJ",
        "PICARAS CLASICA 3CJ +2PK.PIC.EX",
        "OLEMANI 1TR+1BS.OLE+2UN.PIC",
        "MUSS CJX12DISX24UNI",
        "BONBON BUM MISTERY CJX15BSX24U",
        "PANETON W.SIN AGREGADOS CJX6UNX500G",
        "BONI.EXHIBIDOR DELICORP",
        "BONI.MINI BONOBON",
        "MASMELOS CREAM CJX12BOLX50UNI",
        "CHOCOLISTO POTE 300G 18UNI +4U",
        "CHOCOLISTO 1KG 12POT +2POT.1KG",
        "MINIOLEOLE 1TR+1BS.OLE+2UN.PIC",
        "COCOA WINTER.21GR 36DIS+2DIS",
        "PNTON W.BS 1UN+1UNCHOC.TAZA",
        "CUACUA PACK CJX24PKX9UN",
        "MASTICABLE NEXT CJX18BSX100UN",
        "TAPER PRIVILEGIO/SAPITO TX124U",
        "TAPER CARAMELOS STD ARCOR TP",
        "RITZ TACO 1CJ +1PACK.CUACUA",
        "VIZZIO GRAGEA CRUNCH CJX10DSX10",
        "VIZZIO GRAGEA MANI CJX10DSX10U",
        "MINI CASTA CHIPS CJX8TRX6UN",
        "MINI CAÑONAZO CJX12BOLX20UN",
        "GALLETA CHOCMAN CJX14PKX6UN",
        "ESTUCHE CORAZON BOX STD CJX12U",
        "BONBON CORAZON STD CJX18UX150G",
        "COFRE DE AMOR CJX10UNX200GR",
        "CARTERITA ITALIANA CHICA CJX12",
        "CARTERA ITALIANA GRANDE CJX6UN",
        "BONI.FINI DISPLAY 180GR",
        "BONI.FINI REGALIZ 27GR",
        "BONI.FINI TUBES DISPLAY 15GR",
        "FINIROLLER COLORES 1DSP+8U.TUB",
        "FINI ROLLER SANDIA 1DSP+8U.TUB",
        "BONI.WAFER GN CHICO",
        "PICARAS EXTREMA CJX30PAKX6UNI",
        "PICARAS FRESA CJX30PAK X6UNI",
        "BONI.MINIOBLEA SAPITO",
        "TUBESDISPLAY TRES COLORS CJX12",
        "TUBESDISPLAY MORANGO CJX12DX12",
        "TUBESDISPLAY TWISTER CJX12DX12",
        "TUBES DISPLAY UVA CJX12DX12U",
        "TUBESDISPLAY MOR/NARANJA CJX12",
        "TUBESDISPLAY TUTTIFRUTTI CJX12",
        "SODA GOURMET 1CJ+3U.MEGA WAFER",
        "PIC.CLASC 1PK+1PK P.MENTA+2U.P",
        "GITANA GRATED DE SARDINA CJX48",
        "BONI.MORA MOGUL 150GR",
        "BONI.TAPS STD",
        "BOLSON PIÑATERO CJX12BLX410GR",
        "SAPITO FRESA CJX8BLX270GR",
        "SAPITO PLAY CJX8BOLX270GR",
        "SAPITO PINTALENGUA CJX8BLX270G",
        "MINI GOLPE CRUCH CJX12BOLX288G",
        "CHUPETE MTR POPS LECHE CJX15BL",
        "CHUPETE MTR POPS PINTAL.CJX15B",
        "GRANEL MINICHINCHIN CJX10BX750",
        "MINI PICARAS BOLSA CJX12BLX20U",
        "CHAPULIN MARACUYA CJX25BLX25UN",
        "VIZZIO SOBRE ALMENDRA CJX10DS",
        "VIZZIO BARRA MANI CJX12DSX12UN",
        "VIZZIO BARRA LECHE CJX12DSX12U",
        "VIZZIO BARRA CRUNCH CJX12DSX12U",
        "PIC.CLAS 1PK+1PK.MNT+1.DUC+4UP",
        "PANETON W.BOLSA +2UN.COCOA21G",
        "DTG ORION LIMON BOLX30UNX40G",
        "PICARAS CLASICA 6CJ+6PCK.EXTRE",
        "CHOCODONUTS REGALO CHICO CJX12",
        "BON O BON DSP 25CJ + 1CJ",
        "RITZ TACO 2CJ+1BOL MINIS",
        "CHOCOPOP 1DP+1U.CHIN16G+1U.PIC",
        "PIC.CLAS 1PK+1PK.MNT+1.DUC+3UP",
        "BONI.GOMAS GRISSLY",
        "COCOROCO LIMON CJX10BOLX100UNI",
        "BONI.FINI GOMAS MORA 80GR 2CJS",
        "BONI.FINIGOMA GUSANO ACID 3CJS",
        "BONI.FINI MASHM.TRENSA 1CJ",
        "BONI.FINITUBES UVA BRILLO 1CJ",
        "BONI.FINI GOMAS DENTADURA 1CJ",
        "BONI. BONOBONX12 1DISPLAY",
        "BONI.CHUPETE POPS PINTA/LECH.1BOLS",
        "BONI.LENTEJITAS CAJITAS 1DISPL",
        "OLE OLE 3CJ +2BOL.OLEOLE",
        "FINI ROLLER TIRA  X10UNID",
        "MINI PELOTITAS CJX48BLSX55UNI",
        "BONI.2CERRITOS STD DISPLAY",
        "BONI.FINI MASH.TRENZA X80GR",
        "PICARAS CLASICA 6CJ+6PCK.FRES",
        "GOMAS DRAGON BALL CJX12DSX100U",
        "HALLOWEEN SANGRIENTO CJX18BS",
        "HALLOWEEN CONJURO CJX20BSX100U",
        "MISTER POP FEST CJX15BSX24UN",
        "MINI MISTER POP CJX16BSX24UN",
        "MOGUL SANDIA EXTREMA CJX24UNI",
        "SAQUITO FRUTAS CJX12BSX73UN",
        "TURRON MANI CJX20PCKX10UNI",
        "CHOCOLISTO POTE 300G 8UNI +1UN",
        "ARAND 1T+1T.ORIEN+1B.OLE+3U.ARA",
        "ARAND 1T+1T.HABA+1B.OLE+3U.ARA",
        "ORIEN 1T+1T.HABA+1B.OLE+3U.ARA",
        "GRANUT ORIEN.2TR+1B.OLE+3U.ARA",
        "GRANUT ARAND.2TR+1B.OLE+3U.ARA",
        "GRANUT HABAS.2TR+1B.OLE+3U.ARA",
        "TAPERS HALLS STD X 200 UND",
        "BOLIMIX CJX10TPX125UN",
        "MINI GELATINA CJX12BSX50UN",
        "KATABOOM TAPER CJX6TAPER",
        "SUBLIME POWER CJX33PKX6UN",
        "OLE OLE 5CJ +2BOL.PIC.BOLSA",
        "PANETON TODINO CAJA CJX6UX900G",
        "PANETON TODINO BOLS CJX6UX900G",
        "GOMAS FLIPY GRANEL CJX20BX480G",
        "CASINO 3LECHES CJX8PACKX6UNI",
        "HALLOWEEN CALABAZA DSPX40UN",
        "HALLOWEEN ATAUD DSPX40UN",
        "HALLOWEEN CASTILLO DSPX100UNI",
        "PICARAS XL CJ X 24 UNI",
        "HALLOWEEN CALABAZA CJX18BX100U",
        "BOLSON SURTIDO CJX6BOLX1K",
        "PICARAS CLASICA 6CJ+6PCK.MENTA",
        "OLE OLE 15CJ +1CJ",
        "GRANUTS HABASMIX 2TR+2U.GRANUT",
        "GRANUTS HABAS 1T+1T.ORIENT+2U",
        "GRANUTS HABAS 1T+1T.ARANDA+2U",
        "DUCALES FAM 2UN+1PK PIC+3UNPC",
        "EXHIBIDOR BOMBONERA WINTER",
        "SODA GOURMET 1CJ+1PCK.WAFER GN",
        "SODA GOURMET 1CJ+4UN.LENTEJITA",
        "SODA GOURMET 1CJ+4UN.DOñA PEPA",
        "TAPER LIMóN AMBROSOLI",
        "TAPER SUPER RELLENAZO AMBROSOL",
        "ARROZ CAMPO NORTE X20UNI",
        "CHOCOLATE PAPANOEL CJX40BLX110",
        "PELOTITAS PLATEDAS CJX24BLX110",
        "PELOTITAS ROJAS CJX24BLX110UN",
        "PELOTITAS DORADAS CJX24BLX110U",
        "BONI.ROLLO MOGUL 1DSP",
        "RITZ TACO 1CJ +1PACK.DOñA PEPA",
        "VAINILLA FAMI.1CJ+3UN.DOñAPEPA",
        "DOñA PEPA PACKX6UNID",
        "PANETON W.BOLSA +4UN.DOñA PEPA",
        "BONI.SUBLIME POWER 1UNI",
        "RITZ TACO 16UNI +2UNI.DOñAPEPA",
        "BONI.VASO DELICORP 1 UND",
        "BONI.CHOCO ROCKLETS ARCOR",
        "BONI.POSAVUELTO + ARROZ 250GR",
        "BONI.MANDIL CAMPO NORTE",
        "DTG PALADIN LIMON BOLX60UX140G",
        "BONI.MINI GOLPE CRUNCH 1BS",
        "BONI.CARAMELO MENTACHOCOL 1BS",
        "BONI.SAPITO HIERRO 1BS",
        "BONI.SAPITO DISPLAY 1DSP",
        "MINI PANETON PAW PATROL CJX30U",
        "PAñAL HAPPY KIDS XXG PQTX36UNI",
        "PAñAL HAPPY KIDS XG PQTX40UNI",
        "PIñATON DELICOR CJX8BSX100UNI",
        "OLE OLE 2 BLS+EXHIBIDOR",
        "BONI. DOñA PEPA 1 UND",
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comedi01::factory()->sequence(
            ['tcor' => $this->arcticulos[rand(1,900)]],
        )->hasComedi02()->has(
            Comedilp::factory()->count(2)->sequence(
                ['clistpr' => '001'],
                ['clistpr' => '002'],
            )
        )->create();
    }
}
