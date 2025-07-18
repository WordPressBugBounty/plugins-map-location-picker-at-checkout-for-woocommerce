<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit993a252c6a799ab413a5a33aef64f5c5
{
    public static $files = array (
        '8d50dc88e56bace65e1e72f6017983ed' => __DIR__ . '/..' . '/freemius/wordpress-sdk/start.php',
        '174f5545298fc44fc2ee140f23d4bfef' => __DIR__ . '/..' . '/wpbp/pointerplus/pointerplus.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lpac\\' => 5,
            'Location\\' => 9,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lpac\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Location\\' => 
        array (
            0 => __DIR__ . '/..' . '/mjaschen/phpgeo/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'BaconQrCode\\Common\\BitArray' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/BitArray.php',
        'BaconQrCode\\Common\\BitMatrix' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/BitMatrix.php',
        'BaconQrCode\\Common\\BitUtils' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/BitUtils.php',
        'BaconQrCode\\Common\\CharacterSetEci' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/CharacterSetEci.php',
        'BaconQrCode\\Common\\EcBlock' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/EcBlock.php',
        'BaconQrCode\\Common\\EcBlocks' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/EcBlocks.php',
        'BaconQrCode\\Common\\ErrorCorrectionLevel' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/ErrorCorrectionLevel.php',
        'BaconQrCode\\Common\\FormatInformation' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/FormatInformation.php',
        'BaconQrCode\\Common\\Mode' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/Mode.php',
        'BaconQrCode\\Common\\ReedSolomonCodec' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/ReedSolomonCodec.php',
        'BaconQrCode\\Common\\Version' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Common/Version.php',
        'BaconQrCode\\Encoder\\BlockPair' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/BlockPair.php',
        'BaconQrCode\\Encoder\\ByteMatrix' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/ByteMatrix.php',
        'BaconQrCode\\Encoder\\Encoder' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/Encoder.php',
        'BaconQrCode\\Encoder\\MaskUtil' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/MaskUtil.php',
        'BaconQrCode\\Encoder\\MatrixUtil' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/MatrixUtil.php',
        'BaconQrCode\\Encoder\\QrCode' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Encoder/QrCode.php',
        'BaconQrCode\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/ExceptionInterface.php',
        'BaconQrCode\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/InvalidArgumentException.php',
        'BaconQrCode\\Exception\\OutOfBoundsException' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/OutOfBoundsException.php',
        'BaconQrCode\\Exception\\RuntimeException' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/RuntimeException.php',
        'BaconQrCode\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/UnexpectedValueException.php',
        'BaconQrCode\\Exception\\WriterException' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Exception/WriterException.php',
        'BaconQrCode\\Renderer\\Color\\Alpha' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Color/Alpha.php',
        'BaconQrCode\\Renderer\\Color\\Cmyk' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Color/Cmyk.php',
        'BaconQrCode\\Renderer\\Color\\ColorInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Color/ColorInterface.php',
        'BaconQrCode\\Renderer\\Color\\Gray' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Color/Gray.php',
        'BaconQrCode\\Renderer\\Color\\Rgb' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Color/Rgb.php',
        'BaconQrCode\\Renderer\\Eye\\CompositeEye' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Eye/CompositeEye.php',
        'BaconQrCode\\Renderer\\Eye\\EyeInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Eye/EyeInterface.php',
        'BaconQrCode\\Renderer\\Eye\\ModuleEye' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Eye/ModuleEye.php',
        'BaconQrCode\\Renderer\\Eye\\SimpleCircleEye' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Eye/SimpleCircleEye.php',
        'BaconQrCode\\Renderer\\Eye\\SquareEye' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Eye/SquareEye.php',
        'BaconQrCode\\Renderer\\ImageRenderer' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/ImageRenderer.php',
        'BaconQrCode\\Renderer\\Image\\EpsImageBackEnd' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Image/EpsImageBackEnd.php',
        'BaconQrCode\\Renderer\\Image\\ImageBackEndInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Image/ImageBackEndInterface.php',
        'BaconQrCode\\Renderer\\Image\\ImagickImageBackEnd' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Image/ImagickImageBackEnd.php',
        'BaconQrCode\\Renderer\\Image\\SvgImageBackEnd' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Image/SvgImageBackEnd.php',
        'BaconQrCode\\Renderer\\Image\\TransformationMatrix' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Image/TransformationMatrix.php',
        'BaconQrCode\\Renderer\\Module\\DotsModule' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/DotsModule.php',
        'BaconQrCode\\Renderer\\Module\\EdgeIterator\\Edge' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/EdgeIterator/Edge.php',
        'BaconQrCode\\Renderer\\Module\\EdgeIterator\\EdgeIterator' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/EdgeIterator/EdgeIterator.php',
        'BaconQrCode\\Renderer\\Module\\ModuleInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/ModuleInterface.php',
        'BaconQrCode\\Renderer\\Module\\RoundnessModule' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/RoundnessModule.php',
        'BaconQrCode\\Renderer\\Module\\SquareModule' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Module/SquareModule.php',
        'BaconQrCode\\Renderer\\Path\\Close' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/Close.php',
        'BaconQrCode\\Renderer\\Path\\Curve' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/Curve.php',
        'BaconQrCode\\Renderer\\Path\\EllipticArc' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/EllipticArc.php',
        'BaconQrCode\\Renderer\\Path\\Line' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/Line.php',
        'BaconQrCode\\Renderer\\Path\\Move' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/Move.php',
        'BaconQrCode\\Renderer\\Path\\OperationInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/OperationInterface.php',
        'BaconQrCode\\Renderer\\Path\\Path' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/Path/Path.php',
        'BaconQrCode\\Renderer\\PlainTextRenderer' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/PlainTextRenderer.php',
        'BaconQrCode\\Renderer\\RendererInterface' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererInterface.php',
        'BaconQrCode\\Renderer\\RendererStyle\\EyeFill' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/EyeFill.php',
        'BaconQrCode\\Renderer\\RendererStyle\\Fill' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/Fill.php',
        'BaconQrCode\\Renderer\\RendererStyle\\Gradient' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/Gradient.php',
        'BaconQrCode\\Renderer\\RendererStyle\\GradientType' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/GradientType.php',
        'BaconQrCode\\Renderer\\RendererStyle\\RendererStyle' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/RendererStyle.php',
        'BaconQrCode\\Writer' => __DIR__ . '/..' . '/bacon/bacon-qr-code/src/Writer.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DASPRiD\\Enum\\AbstractEnum' => __DIR__ . '/..' . '/dasprid/enum/src/AbstractEnum.php',
        'DASPRiD\\Enum\\EnumMap' => __DIR__ . '/..' . '/dasprid/enum/src/EnumMap.php',
        'DASPRiD\\Enum\\Exception\\CloneNotSupportedException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/CloneNotSupportedException.php',
        'DASPRiD\\Enum\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/ExceptionInterface.php',
        'DASPRiD\\Enum\\Exception\\ExpectationException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/ExpectationException.php',
        'DASPRiD\\Enum\\Exception\\IllegalArgumentException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/IllegalArgumentException.php',
        'DASPRiD\\Enum\\Exception\\MismatchException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/MismatchException.php',
        'DASPRiD\\Enum\\Exception\\SerializeNotSupportedException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/SerializeNotSupportedException.php',
        'DASPRiD\\Enum\\Exception\\UnserializeNotSupportedException' => __DIR__ . '/..' . '/dasprid/enum/src/Exception/UnserializeNotSupportedException.php',
        'DASPRiD\\Enum\\NullValue' => __DIR__ . '/..' . '/dasprid/enum/src/NullValue.php',
        'Endroid\\QrCode\\Bacon\\ErrorCorrectionLevelConverter' => __DIR__ . '/..' . '/endroid/qr-code/src/Bacon/ErrorCorrectionLevelConverter.php',
        'Endroid\\QrCode\\Bacon\\MatrixFactory' => __DIR__ . '/..' . '/endroid/qr-code/src/Bacon/MatrixFactory.php',
        'Endroid\\QrCode\\Builder\\Builder' => __DIR__ . '/..' . '/endroid/qr-code/src/Builder/Builder.php',
        'Endroid\\QrCode\\Builder\\BuilderInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Builder/BuilderInterface.php',
        'Endroid\\QrCode\\Builder\\BuilderRegistry' => __DIR__ . '/..' . '/endroid/qr-code/src/Builder/BuilderRegistry.php',
        'Endroid\\QrCode\\Builder\\BuilderRegistryInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Builder/BuilderRegistryInterface.php',
        'Endroid\\QrCode\\Color\\Color' => __DIR__ . '/..' . '/endroid/qr-code/src/Color/Color.php',
        'Endroid\\QrCode\\Color\\ColorInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Color/ColorInterface.php',
        'Endroid\\QrCode\\Encoding\\Encoding' => __DIR__ . '/..' . '/endroid/qr-code/src/Encoding/Encoding.php',
        'Endroid\\QrCode\\Encoding\\EncodingInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Encoding/EncodingInterface.php',
        'Endroid\\QrCode\\ErrorCorrectionLevel\\ErrorCorrectionLevelHigh' => __DIR__ . '/..' . '/endroid/qr-code/src/ErrorCorrectionLevel/ErrorCorrectionLevelHigh.php',
        'Endroid\\QrCode\\ErrorCorrectionLevel\\ErrorCorrectionLevelInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/ErrorCorrectionLevel/ErrorCorrectionLevelInterface.php',
        'Endroid\\QrCode\\ErrorCorrectionLevel\\ErrorCorrectionLevelLow' => __DIR__ . '/..' . '/endroid/qr-code/src/ErrorCorrectionLevel/ErrorCorrectionLevelLow.php',
        'Endroid\\QrCode\\ErrorCorrectionLevel\\ErrorCorrectionLevelMedium' => __DIR__ . '/..' . '/endroid/qr-code/src/ErrorCorrectionLevel/ErrorCorrectionLevelMedium.php',
        'Endroid\\QrCode\\ErrorCorrectionLevel\\ErrorCorrectionLevelQuartile' => __DIR__ . '/..' . '/endroid/qr-code/src/ErrorCorrectionLevel/ErrorCorrectionLevelQuartile.php',
        'Endroid\\QrCode\\ImageData\\LabelImageData' => __DIR__ . '/..' . '/endroid/qr-code/src/ImageData/LabelImageData.php',
        'Endroid\\QrCode\\ImageData\\LogoImageData' => __DIR__ . '/..' . '/endroid/qr-code/src/ImageData/LogoImageData.php',
        'Endroid\\QrCode\\Label\\Alignment\\LabelAlignmentCenter' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Alignment/LabelAlignmentCenter.php',
        'Endroid\\QrCode\\Label\\Alignment\\LabelAlignmentInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Alignment/LabelAlignmentInterface.php',
        'Endroid\\QrCode\\Label\\Alignment\\LabelAlignmentLeft' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Alignment/LabelAlignmentLeft.php',
        'Endroid\\QrCode\\Label\\Alignment\\LabelAlignmentRight' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Alignment/LabelAlignmentRight.php',
        'Endroid\\QrCode\\Label\\Font\\Font' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Font/Font.php',
        'Endroid\\QrCode\\Label\\Font\\FontInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Font/FontInterface.php',
        'Endroid\\QrCode\\Label\\Font\\NotoSans' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Font/NotoSans.php',
        'Endroid\\QrCode\\Label\\Font\\OpenSans' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Font/OpenSans.php',
        'Endroid\\QrCode\\Label\\Label' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Label.php',
        'Endroid\\QrCode\\Label\\LabelInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/LabelInterface.php',
        'Endroid\\QrCode\\Label\\Margin\\Margin' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Margin/Margin.php',
        'Endroid\\QrCode\\Label\\Margin\\MarginInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Label/Margin/MarginInterface.php',
        'Endroid\\QrCode\\Logo\\Logo' => __DIR__ . '/..' . '/endroid/qr-code/src/Logo/Logo.php',
        'Endroid\\QrCode\\Logo\\LogoInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Logo/LogoInterface.php',
        'Endroid\\QrCode\\Matrix\\Matrix' => __DIR__ . '/..' . '/endroid/qr-code/src/Matrix/Matrix.php',
        'Endroid\\QrCode\\Matrix\\MatrixFactoryInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Matrix/MatrixFactoryInterface.php',
        'Endroid\\QrCode\\Matrix\\MatrixInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Matrix/MatrixInterface.php',
        'Endroid\\QrCode\\QrCode' => __DIR__ . '/..' . '/endroid/qr-code/src/QrCode.php',
        'Endroid\\QrCode\\QrCodeInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/QrCodeInterface.php',
        'Endroid\\QrCode\\RoundBlockSizeMode\\RoundBlockSizeModeEnlarge' => __DIR__ . '/..' . '/endroid/qr-code/src/RoundBlockSizeMode/RoundBlockSizeModeEnlarge.php',
        'Endroid\\QrCode\\RoundBlockSizeMode\\RoundBlockSizeModeInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/RoundBlockSizeMode/RoundBlockSizeModeInterface.php',
        'Endroid\\QrCode\\RoundBlockSizeMode\\RoundBlockSizeModeMargin' => __DIR__ . '/..' . '/endroid/qr-code/src/RoundBlockSizeMode/RoundBlockSizeModeMargin.php',
        'Endroid\\QrCode\\RoundBlockSizeMode\\RoundBlockSizeModeNone' => __DIR__ . '/..' . '/endroid/qr-code/src/RoundBlockSizeMode/RoundBlockSizeModeNone.php',
        'Endroid\\QrCode\\RoundBlockSizeMode\\RoundBlockSizeModeShrink' => __DIR__ . '/..' . '/endroid/qr-code/src/RoundBlockSizeMode/RoundBlockSizeModeShrink.php',
        'Endroid\\QrCode\\Writer\\BinaryWriter' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/BinaryWriter.php',
        'Endroid\\QrCode\\Writer\\DebugWriter' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/DebugWriter.php',
        'Endroid\\QrCode\\Writer\\EpsWriter' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/EpsWriter.php',
        'Endroid\\QrCode\\Writer\\PdfWriter' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/PdfWriter.php',
        'Endroid\\QrCode\\Writer\\PngWriter' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/PngWriter.php',
        'Endroid\\QrCode\\Writer\\Result\\AbstractResult' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/Result/AbstractResult.php',
        'Endroid\\QrCode\\Writer\\Result\\BinaryResult' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/Result/BinaryResult.php',
        'Endroid\\QrCode\\Writer\\Result\\DebugResult' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/Result/DebugResult.php',
        'Endroid\\QrCode\\Writer\\Result\\EpsResult' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/Result/EpsResult.php',
        'Endroid\\QrCode\\Writer\\Result\\PdfResult' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/Result/PdfResult.php',
        'Endroid\\QrCode\\Writer\\Result\\PngResult' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/Result/PngResult.php',
        'Endroid\\QrCode\\Writer\\Result\\ResultInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/Result/ResultInterface.php',
        'Endroid\\QrCode\\Writer\\Result\\SvgResult' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/Result/SvgResult.php',
        'Endroid\\QrCode\\Writer\\SvgWriter' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/SvgWriter.php',
        'Endroid\\QrCode\\Writer\\ValidatingWriterInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/ValidatingWriterInterface.php',
        'Endroid\\QrCode\\Writer\\WriterInterface' => __DIR__ . '/..' . '/endroid/qr-code/src/Writer/WriterInterface.php',
        'Location\\Bearing\\BearingEllipsoidal' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Bearing/BearingEllipsoidal.php',
        'Location\\Bearing\\BearingInterface' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Bearing/BearingInterface.php',
        'Location\\Bearing\\BearingSpherical' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Bearing/BearingSpherical.php',
        'Location\\Bearing\\DirectVincentyBearing' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Bearing/DirectVincentyBearing.php',
        'Location\\Bearing\\InverseVincentyBearing' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Bearing/InverseVincentyBearing.php',
        'Location\\Bounds' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Bounds.php',
        'Location\\CardinalDirection\\CardinalDirection' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/CardinalDirection/CardinalDirection.php',
        'Location\\CardinalDirection\\CardinalDirectionDistances' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/CardinalDirection/CardinalDirectionDistances.php',
        'Location\\CardinalDirection\\CardinalDirectionDistancesCalculator' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/CardinalDirection/CardinalDirectionDistancesCalculator.php',
        'Location\\Coordinate' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Coordinate.php',
        'Location\\Distance\\DistanceInterface' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Distance/DistanceInterface.php',
        'Location\\Distance\\Haversine' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Distance/Haversine.php',
        'Location\\Distance\\Vincenty' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Distance/Vincenty.php',
        'Location\\Ellipsoid' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Ellipsoid.php',
        'Location\\Exception\\BearingNotAvailableException' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Exception/BearingNotAvailableException.php',
        'Location\\Exception\\InvalidDistanceException' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Exception/InvalidDistanceException.php',
        'Location\\Exception\\InvalidGeometryException' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Exception/InvalidGeometryException.php',
        'Location\\Exception\\InvalidPolygonException' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Exception/InvalidPolygonException.php',
        'Location\\Exception\\NotConvergingException' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Exception/NotConvergingException.php',
        'Location\\Exception\\NotMatchingEllipsoidException' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Exception/NotMatchingEllipsoidException.php',
        'Location\\Factory\\BoundsFactory' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Factory/BoundsFactory.php',
        'Location\\Factory\\CoordinateFactory' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Factory/CoordinateFactory.php',
        'Location\\Factory\\GeometryFactoryInterface' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Factory/GeometryFactoryInterface.php',
        'Location\\Formatter\\Coordinate\\DMS' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Formatter/Coordinate/DMS.php',
        'Location\\Formatter\\Coordinate\\DecimalDegrees' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Formatter/Coordinate/DecimalDegrees.php',
        'Location\\Formatter\\Coordinate\\DecimalMinutes' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Formatter/Coordinate/DecimalMinutes.php',
        'Location\\Formatter\\Coordinate\\FormatterInterface' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Formatter/Coordinate/FormatterInterface.php',
        'Location\\Formatter\\Coordinate\\GeoJSON' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Formatter/Coordinate/GeoJSON.php',
        'Location\\Formatter\\Polygon\\FormatterInterface' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Formatter/Polygon/FormatterInterface.php',
        'Location\\Formatter\\Polygon\\GeoJSON' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Formatter/Polygon/GeoJSON.php',
        'Location\\Formatter\\Polyline\\FormatterInterface' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Formatter/Polyline/FormatterInterface.php',
        'Location\\Formatter\\Polyline\\GeoJSON' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Formatter/Polyline/GeoJSON.php',
        'Location\\GeometryInterface' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/GeometryInterface.php',
        'Location\\GetBoundsTrait' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/GetBoundsTrait.php',
        'Location\\Line' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Line.php',
        'Location\\Polygon' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Polygon.php',
        'Location\\Polyline' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Polyline.php',
        'Location\\Processor\\Polyline\\SimplifyBearing' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Processor/Polyline/SimplifyBearing.php',
        'Location\\Processor\\Polyline\\SimplifyDouglasPeucker' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Processor/Polyline/SimplifyDouglasPeucker.php',
        'Location\\Processor\\Polyline\\SimplifyInterface' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Processor/Polyline/SimplifyInterface.php',
        'Location\\Utility\\Cartesian' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Utility/Cartesian.php',
        'Location\\Utility\\PerpendicularDistance' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Utility/PerpendicularDistance.php',
        'Location\\Utility\\PointToLineDistance' => __DIR__ . '/..' . '/mjaschen/phpgeo/src/Utility/PointToLineDistance.php',
        'Lpac\\Bootstrap\\Admin_Enqueues' => __DIR__ . '/../..' . '/includes/Bootstrap/Admin_Enqueues.php',
        'Lpac\\Bootstrap\\Frontend_Enqueues' => __DIR__ . '/../..' . '/includes/Bootstrap/Frontend_Enqueues.php',
        'Lpac\\Bootstrap\\I18n' => __DIR__ . '/../..' . '/includes/Bootstrap/I18n.php',
        'Lpac\\Bootstrap\\Loader' => __DIR__ . '/../..' . '/includes/Bootstrap/Loader.php',
        'Lpac\\Bootstrap\\Main' => __DIR__ . '/../..' . '/includes/Bootstrap/Main.php',
        'Lpac\\Compatibility\\Caching\\Siteground_Optimizer' => __DIR__ . '/../..' . '/includes/Compatibility/Caching/Siteground_Optimizer.php',
        'Lpac\\Compatibility\\Checkout_Provider' => __DIR__ . '/../..' . '/includes/Compatibility/Checkout_Provider.php',
        'Lpac\\Compatibility\\FunnelKit\\FunnelKit' => __DIR__ . '/../..' . '/includes/Compatibility/FunnelKit/FunnelKit.php',
        'Lpac\\Controllers\\AdminSettingsController' => __DIR__ . '/../..' . '/includes/Controllers/AdminSettingsController.php',
        'Lpac\\Controllers\\Checkout_Page\\Controller' => __DIR__ . '/../..' . '/includes/Controllers/Checkout_Page/Controller.php',
        'Lpac\\Controllers\\Checkout_Page\\Validate' => __DIR__ . '/../..' . '/includes/Controllers/Checkout_Page/Validate.php',
        'Lpac\\Controllers\\Emails_Controller' => __DIR__ . '/../..' . '/includes/Controllers/Emails_Controller.php',
        'Lpac\\Controllers\\Map_Visibility_Controller' => __DIR__ . '/../..' . '/includes/Controllers/Map_Visibility_Controller.php',
        'Lpac\\Controllers\\Shortcodes' => __DIR__ . '/../..' . '/includes/Controllers/Shortcodes.php',
        'Lpac\\Controllers\\SiteWide\\InlineScriptsController' => __DIR__ . '/../..' . '/includes/Controllers/SiteWide/InlineScriptsController.php',
        'Lpac\\Helpers\\Functions' => __DIR__ . '/../..' . '/includes/Helpers/Functions.php',
        'Lpac\\Helpers\\Logger' => __DIR__ . '/../..' . '/includes/Helpers/Logger.php',
        'Lpac\\Helpers\\QR_Code_Generator' => __DIR__ . '/../..' . '/includes/Helpers/QR_Code_Generator.php',
        'Lpac\\Helpers\\Utilities' => __DIR__ . '/../..' . '/includes/Helpers/Utilities.php',
        'Lpac\\KikoteActivator' => __DIR__ . '/../..' . '/includes/KikoteActivator.php',
        'Lpac\\KikoteDeactivator' => __DIR__ . '/../..' . '/includes/KikoteDeactivator.php',
        'Lpac\\Models\\Base_Model' => __DIR__ . '/../..' . '/includes/Models/Base_Model.php',
        'Lpac\\Models\\Location_Details' => __DIR__ . '/../..' . '/includes/Models/Location_Details.php',
        'Lpac\\Models\\Migrations' => __DIR__ . '/../..' . '/includes/Models/Migrations.php',
        'Lpac\\Models\\Plugin_Settings\\General_Settings' => __DIR__ . '/../..' . '/includes/Models/Plugin_Settings/General_Settings.php',
        'Lpac\\Models\\Plugin_Settings\\Store_Locations' => __DIR__ . '/../..' . '/includes/Models/Plugin_Settings/Store_Locations.php',
        'Lpac\\Notices\\Admin' => __DIR__ . '/../..' . '/includes/Notices/Admin.php',
        'Lpac\\Notices\\General_Notices' => __DIR__ . '/../..' . '/includes/Notices/General_Notices.php',
        'Lpac\\Notices\\Loader' => __DIR__ . '/../..' . '/includes/Notices/Loader.php',
        'Lpac\\Notices\\Notice' => __DIR__ . '/../..' . '/includes/Notices/Notice.php',
        'Lpac\\Notices\\Review_Notices' => __DIR__ . '/../..' . '/includes/Notices/Review_Notices.php',
        'Lpac\\Notices\\Upsells_Notices' => __DIR__ . '/../..' . '/includes/Notices/Upsells_Notices.php',
        'Lpac\\Pro\\Controllers\\AdminSettingsController' => __DIR__ . '/../..' . '/includes/Pro/Controllers/AdminSettingsController.php',
        'Lpac\\Pro\\Controllers\\Admin\\CustomPostTypes' => __DIR__ . '/../..' . '/includes/Pro/Controllers/Admin/CustomPostTypes.php',
        'Lpac\\Pro\\Controllers\\Checkout_Page\\Controller' => __DIR__ . '/../..' . '/includes/Pro/Controllers/Checkout_Page/Controller.php',
        'Lpac\\Pro\\Controllers\\Checkout_Page\\StoreLocations\\ShippingMethods' => __DIR__ . '/../..' . '/includes/Pro/Controllers/Checkout_Page/StoreLocations/ShippingMethods.php',
        'Lpac\\Pro\\Controllers\\Checkout_Page\\Validate' => __DIR__ . '/../..' . '/includes/Pro/Controllers/Checkout_Page/Validate.php',
        'Lpac\\Pro\\Controllers\\Draw_Shipping_Region' => __DIR__ . '/../..' . '/includes/Pro/Controllers/Draw_Shipping_Region.php',
        'Lpac\\Pro\\Controllers\\Export_Orders' => __DIR__ . '/../..' . '/includes/Pro/Controllers/Export_Orders.php',
        'Lpac\\Pro\\Controllers\\Shipping\\CostByDistance' => __DIR__ . '/../..' . '/includes/Pro/Controllers/Shipping/CostByDistance.php',
        'Lpac\\Pro\\Controllers\\Shipping\\CostByRegion' => __DIR__ . '/../..' . '/includes/Pro/Controllers/Shipping/CostByRegion.php',
        'Lpac\\Pro\\Controllers\\Shipping\\CostByStoreLocation' => __DIR__ . '/../..' . '/includes/Pro/Controllers/Shipping/CostByStoreLocation.php',
        'Lpac\\Pro\\Controllers\\Shipping\\SetupSession' => __DIR__ . '/../..' . '/includes/Pro/Controllers/Shipping/SetupSession.php',
        'Lpac\\Pro\\Controllers\\WooCommerce_Account' => __DIR__ . '/../..' . '/includes/Pro/Controllers/WooCommerce_Account.php',
        'Lpac\\Pro\\Helpers\\Functions' => __DIR__ . '/../..' . '/includes/Pro/Helpers/Functions.php',
        'Lpac\\Pro\\Models\\Admin\\CustomPostTypes\\Map_Builder' => __DIR__ . '/../..' . '/includes/Pro/Models/Admin/CustomPostTypes/Map_Builder.php',
        'Lpac\\Pro\\Models\\Draw_Shipping_Region' => __DIR__ . '/../..' . '/includes/Pro/Models/Draw_Shipping_Region.php',
        'Lpac\\Pro\\Models\\Export_Orders' => __DIR__ . '/../..' . '/includes/Pro/Models/Export_Orders.php',
        'Lpac\\Pro\\Models\\Location_Details' => __DIR__ . '/../..' . '/includes/Pro/Models/Location_Details.php',
        'Lpac\\Pro\\Models\\Plugin_Settings\\DisplaySettings' => __DIR__ . '/../..' . '/includes/Pro/Models/Plugin_Settings/DisplaySettings.php',
        'Lpac\\Pro\\Models\\Plugin_Settings\\Shipping_Settings' => __DIR__ . '/../..' . '/includes/Pro/Models/Plugin_Settings/Shipping_Settings.php',
        'Lpac\\Pro\\Models\\Plugin_Settings\\StoreLocations' => __DIR__ . '/../..' . '/includes/Pro/Models/Plugin_Settings/StoreLocations.php',
        'Lpac\\Pro\\Models\\Saved_Addresses' => __DIR__ . '/../..' . '/includes/Pro/Models/Saved_Addresses.php',
        'Lpac\\Pro\\Models\\Shortcodes\\Map_Builder\\Map_Settings' => __DIR__ . '/../..' . '/includes/Pro/Models/Shortcodes/Map_Builder/Map_Settings.php',
        'Lpac\\Pro\\Models\\WooCommerce_Account' => __DIR__ . '/../..' . '/includes/Pro/Models/WooCommerce_Account.php',
        'Lpac\\Pro\\Views\\Admin\\Admin' => __DIR__ . '/../..' . '/includes/Pro/Views/Admin/Admin.php',
        'Lpac\\Pro\\Views\\Admin\\Admin_Settings' => __DIR__ . '/../..' . '/includes/Pro/Views/Admin/Admin_Settings.php',
        'Lpac\\Pro\\Views\\Admin\\CustomPostTypes\\Map_Builder' => __DIR__ . '/../..' . '/includes/Pro/Views/Admin/CustomPostTypes/Map_Builder.php',
        'Lpac\\Pro\\Views\\Frontend\\Frontend' => __DIR__ . '/../..' . '/includes/Pro/Views/Frontend/Frontend.php',
        'Lpac\\Pro\\Views\\Frontend\\Shortcodes' => __DIR__ . '/../..' . '/includes/Pro/Views/Frontend/Shortcodes.php',
        'Lpac\\Pro\\Views\\Frontend\\WooCommerce_Account' => __DIR__ . '/../..' . '/includes/Pro/Views/Frontend/WooCommerce_Account.php',
        'Lpac\\Traits\\Plugin_Info' => __DIR__ . '/../..' . '/includes/Traits/Plugin_Info.php',
        'Lpac\\Traits\\Upload_Folders' => __DIR__ . '/../..' . '/includes/Traits/Upload_Folders.php',
        'Lpac\\Views\\Admin\\Admin' => __DIR__ . '/../..' . '/includes/Views/Admin/Admin.php',
        'Lpac\\Views\\Admin\\Admin_Settings' => __DIR__ . '/../..' . '/includes/Views/Admin/Admin_Settings.php',
        'Lpac\\Views\\Admin\\RegionList' => __DIR__ . '/../..' . '/includes/Views/Admin/RegionList.php',
        'Lpac\\Views\\Frontend\\Frontend' => __DIR__ . '/../..' . '/includes/Views/Frontend/Frontend.php',
        'Lpac\\Views\\Frontend\\Shortcodes' => __DIR__ . '/../..' . '/includes/Views/Frontend/Shortcodes.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit993a252c6a799ab413a5a33aef64f5c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit993a252c6a799ab413a5a33aef64f5c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit993a252c6a799ab413a5a33aef64f5c5::$classMap;

        }, null, ClassLoader::class);
    }
}
