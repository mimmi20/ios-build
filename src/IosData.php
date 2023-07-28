<?php
/**
 * This file is part of the ios-build package.
 *
 * Copyright (c) 2019-2023, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace IosBuild;

final class IosData
{
    public const VERSIONS = [
        '1A420' => '1.0b1',
        '1A543a' => '1.0',
        '1C25' => '1.0.1',
        '1C28' => '1.0.2',
        '3A100a' => '1.1',
        '3A101a' => '1.1',
        '3A109a' => '1.1.1',
        '3A110a' => '1.1.1',
        '3B48b' => '1.1.2',
        '4A93' => '1.1.3',
        '4A102' => '1.1.4',
        '4B1' => '1.1.5',
        '5A147p' => '1.2b1',

        '5A225c' => '2.0b2',
        '5A240d' => '2.0b3',
        '5A258f' => '2.0b4',
        '5A274d' => '2.0b5',
        '5A292g' => '2.0b6',
        '5A308' => '2.0b6',
        '5A331' => '2.0b7',
        '5A345' => '2.0b8',
        '5A347' => '2.0',
        '5B108' => '2.0.1',
        '5C1' => '2.0.2',
        '5F136' => '2.1',
        '5F137' => '2.1',
        '5F138' => '2.1.1',
        '5G29' => '2.2b1',
        '5G77' => '2.2',
        '5G77a' => '2.2',
        '5H11' => '2.2.1',
        '5H11a' => '2.2.1',

        '7A238j' => '3.0b1',
        '7A259g' => '3.0b2',
        '7A280f' => '3.0b3',
        '7A300g' => '3.0b4',
        '7A312g' => '3.0b5',
        '7A341' => '3.0',
        '7A400' => '3.0.1',
        '7C97d' => '3.1b1',
        '7C106c' => '3.1b2',
        '7C116a' => '3.1b3',
        '7C144' => '3.1',
        '7C145' => '3.1.1',
        '7C146' => '3.1.1',
        '7D11' => '3.1.2',
        '7E18' => '3.1.3',
        '7B367' => '3.2',
        '7B405' => '3.2.1',
        '7B500' => '3.2.2',

        '8A2180g' => '4.0b1',
        '8A230m' => '4.0b1',
        '8A248c' => '4.0b2',
        '8A260b' => '4.0b3',
        '8A274b' => '4.0b4',
        '8A293' => '4.0',
        '8A306' => '4.0.1',
        '8A400' => '4.0.2',
        '8B5080c' => '4.1b1',
        '8B5091b' => '4.1b2',
        '8B117' => '4.1',
        '8B118' => '4.1',
        '8C5091e' => '4.2b1',
        '8C5101c' => '4.2b2',
        '8C5115c' => '4.2b3',
        '8C134' => '4.2',
        '8C134b' => '4.2',
        '8C148' => '4.2.1',
        '8C148a' => '4.2.1',
        '8E128' => '4.2.5',
        '8E200' => '4.2.6',
        '8E303' => '4.2.7',
        '8E401' => '4.2.8',
        '8E501' => '4.2.9',
        '8E600' => '4.2.10',
        '8F5148b' => '4.3b1',
        '8F5153d' => '4.3b2',
        '8F5166b' => '4.3b3',
        '8F190' => '4.3',
        '8F191' => '4.3',
        '8G4' => '4.3.1',
        '8H7' => '4.3.2',
        '8H8' => '4.3.2',
        '8J1' => '4.3.3',
        '8J2' => '4.3.3',
        '8J3' => '4.3.3',
        '8K2' => '4.3.4',
        '8L1' => '4.3.5',

        '9A5220p' => '5.0b1',
        '9A5248d' => '5.0b2',
        '9A5259f' => '5.0b3',
        '9A5274d' => '5.0b4',
        '9A5288d' => '5.0b5',
        '9A5302b' => '5.0b6',
        '9A5313e' => '5.0b7',
        '9A332' => '5.0',
        '9A334' => '5.0',
        '9A402' => '5.0.1b1',
        '9A404' => '5.0.1b2',
        '9A405' => '5.0.1',
        '9A406' => '5.0.1',
        '9B5117b' => '5.1b1',
        '9B5127c' => '5.1b2',
        '9B5141a' => '5.1b3',
        '9B176' => '5.1',
        '9B179' => '5.1',
        '9B179b' => '5.1',
        '9B206' => '5.1.1',
        '9B208' => '5.1.1',

        '10A5316k' => '6.0b1',
        '10A5338d' => '6.0b2',
        '10A5355d' => '6.0b3',
        '10A5376e' => '6.0b4',
        '10A403' => '6.0',
        '10A405' => '6.0',
        '10A406' => '6.0',
        '10A407' => '6.0',
        '10A523' => '6.0.1',
        '10A525' => '6.0.1',
        '10A8426' => '6.0.1',
        '10A8500' => '6.0.2',
        '10A550' => '6.0.2',
        '10A551' => '6.0.2',
        '10B5095f' => '6.1b1',
        '10B5105c' => '6.1b2',
        '10B5117b' => '6.1b3',
        '10B5126b' => '6.1b4',
        '10B141' => '6.1',
        '10B142' => '6.1',
        '10B143' => '6.1',
        '10B144' => '6.1',
        '10B145' => '6.1.1',
        '10B146' => '6.1.2',
        '10B147' => '6.1.2',
        '10B318' => '6.1.3b2',
        '10B318a' => '6.1.3b2',
        '10B329' => '6.1.3',
        '10B350' => '6.1.4',
        '10B400' => '6.1.5',
        '10B500' => '6.1.6',

        '11A4372q' => '7.0b1',
        '11A4400f' => '7.0b2',
        '11A4414e' => '7.0b3',
        '11A4435d' => '7.0b4',
        '11A4449a' => '7.0b5',
        '11A4449d' => '7.0b6',
        '11A465' => '7.0',
        '11A466' => '7.0',
        '11A470a' => '7.0.1',
        '11A501' => '7.0.2',
        '11A510' => '7.0.2',
        '11B511' => '7.0.3',
        '11B554a' => '7.0.4',
        '11B601' => '7.0.5',
        '11B651' => '7.0.6',
        '11D5099e' => '7.1b1',
        '11D5115d' => '7.1b2',
        '11D5127c' => '7.1b3',
        '11D5134c' => '7.1b4',
        '11D5145e' => '7.1b5',
        '11D163' => '7.1',
        '11D167' => '7.1',
        '11D169' => '7.1',
        '11D201' => '7.1.1',
        '11D257' => '7.1.2',

        '12A4265u' => '8.0b1',
        '12A4297e' => '8.0b2',
        '12A4318c' => '8.0b3',
        '12A4331d' => '8.0b4',
        '12A4345d' => '8.0b5',
        '12A360' => '8.0',
        '12A365' => '8.0',
        '12A366' => '8.0',
        '12A402' => '8.0.1',
        '12A405' => '8.0.2',
        '12B401' => '8.1b1',
        '12B407' => '8.1b2',
        '12B410' => '8.1',
        '12B411' => '8.1',
        '12B432' => '8.1.1b',
        '12B435' => '8.1.1',
        '12B436' => '8.1.1',
        '12B440' => '8.1.2',
        '12B466' => '8.1.3',
        '12D436' => '8.2b1',
        '12D445d' => '8.2b2',
        '12D5452a' => '8.2b3',
        '12D5461b' => '8.2b4',
        '12D5480a' => '8.2b5',
        '12D508' => '8.2',
        '12F5027d' => '8.3b1',
        '12F5037c' => '8.3b2',
        '12F5047f' => '8.3b3',
        '12F5061' => '8.3b4',
        '12F61' => '8.3',
        '12F69' => '8.3',
        '12F70' => '8.3',
        '12H4074d' => '8.4b1',
        '12H4086d' => '8.4b2',
        '12H4098c' => '8.4b3',
        '12H4125a' => '8.4b4',
        '12H121' => '8.4',
        '12H143' => '8.4',
        '12H304' => '8.4.1b1',
        '12H318' => '8.4.1b2',
        '12H321' => '8.4.1',

        '13A4254v' => '9.0b1',
        '13A4280e' => '9.0b2',
        '13A4293f' => '9.0b3',
        '13A4305g' => '9.0b4',
        '13A4325c' => '9.0b5',
        '13A340' => '9.0',
        '13A342' => '9.0',
        '13A343' => '9.0',
        '13A344' => '9.0',
        '13A404' => '9.0.1',
        '13A405' => '9.0.1',
        '13A452' => '9.0.2',
        '13B5110e' => '9.1b1',
        '13B5119e' => '9.1b2',
        '13B5130b' => '9.1b3',
        '13B136' => '9.1b4',
        '13B137' => '9.1b5',
        '13B139' => '9.1b5',
        '13B143' => '9.1',
        '13C5055d' => '9.2b1',
        '13C5060d' => '9.2b2',
        '13C71' => '9.2b3',
        '13C5075' => '9.2b4',
        '13C75' => '9.2',
        '13D11' => '9.2.1b1',
        '13D14' => '9.2.1b2',
        '13D15' => '9.2.1',
        '13D20' => '9.2.1',
        '13E5181d' => '9.3b1',
        '13E5191d' => '9.3b2',
        '13E5200d' => '9.3b3',
        '13E5214d' => '9.3b4',
        '13E5225a' => '9.3b5',
        '13E5231a' => '9.3b6',
        '13E5233a' => '9.3b7',
        '13E233' => '9.3',
        '13E234' => '9.3',
        '13E236' => '9.3',
        '13E237' => '9.3',
        '13E238' => '9.3.1',
        '13F51a' => '9.3.2b1',
        '13F61' => '9.3.2b2',
        '13F65' => '9.3.2b3',
        '13F68' => '9.3.2b4',
        '13F69' => '9.3.2',
        '13F72' => '9.3.2',
        '13G12' => '9.3.3b1',
        '13G21' => '9.3.3b2',
        '13G29' => '9.3.3b3',
        '13G33' => '9.3.3b4',
        '13G34' => '9.3.3',
        '13G35' => '9.3.4',
        '13G36' => '9.3.5',

        '14A5261v' => '10.0b1',
        '14A5297c' => '10.0b2',
        '14A5309d' => '10.0b3',
        '14A5322e' => '10.0b4',
        '14A5335b' => '10.0b5',
        '14A5341a' => '10.0b6',
        '14A5345a' => '10.0b7',
        '14A5346a' => '10.0b8',
        '14A346' => '10.0',
        '14A403' => '10.0.1',
        '14A456' => '10.0.2',
        '14A551' => '10.0.3',
        '14B55c' => '10.1b1',
        '14B67' => '10.1b2',
        '14B71' => '10.1b3',
        '14B73' => '10.1b4',
        '14B72' => '10.1',
        '14B72c' => '10.1',
        '14B100' => '10.1.1',
        '14B150' => '10.1.1',
        '14C5062e' => '10.2b1',
        '14C5069c' => '10.2b2',
        '14C5077b' => '10.2b3',
        '14C82' => '10.2b4',
        '14C89' => '10.2b5',
        '14C90' => '10.2b6',
        '14C91' => '10.2b6',
        '14C92' => '10.2',
        '14D10' => '10.2.1b1',
        '14D15' => '10.2.1b2',
        '14D23' => '10.2.1b3',
        '14D27' => '10.2.1',
        '14E5230e' => '10.3b1',
        '14E5239e' => '10.3b2',
        '14E5249d' => '10.3b3',
        '14E5260b' => '10.3b4',
        '14E5269a' => '10.3b5',
        '14E5273a' => '10.3b6',
        '14E5277a' => '10.3b7',
        '14E277' => '10.3',
        '14E304' => '10.3.1',
        '14F5065b' => '10.3.2b1',
        '14F5075a' => '10.3.2b2',
        '14F5080a' => '10.3.2b3',
        '14F5086a' => '10.3.2b4',
        '14F5089a' => '10.3.2b5',
        '14F89' => '10.3.2',
        '14F90' => '10.3.2',
        '14F91' => '10.3.2',
        '14G5028a' => '10.3.3b1',
        '14G5037b' => '10.3.3b2',
        '14G5047a' => '10.3.3b3',
        '14G5053a' => '10.3.3b4',
        '14G5057a' => '10.3.3b5',
        '14G57' => '10.3.3b6',
        '14G58' => '10.3.3b6',
        '14G60' => '10.3.3',

        '15A5278f' => '11.0b1',
        '15A5304i' => '11.0b2',
        '15A5304j' => '11.0b2',
        '15A5318g' => '11.0b3',
        '15A5327g' => '11.0b4',
        '15A5341f' => '11.0b5',
        '15A5354b' => '11.0b6',
        '15A5362a' => '11.0b7',
        '15A5368a' => '11.0b8',
        '15A5370a' => '11.0b9',
        '15A5372a' => '11.0b10',
        '15A372' => '11.0',
        '15A402' => '11.0.1',
        '15A403' => '11.0.1',
        '15A421' => '11.0.2',
        '15A432' => '11.0.3',
        '15B5066f' => '11.1b1',
        '15B5078e' => '11.1b2',
        '15B5086a' => '11.1b3',
        '15B92' => '11.1b4',
        '15B93' => '11.1b5',
        '15B101' => '11.1',
        '15B150' => '11.1.1',
        '15C5092b' => '11.2b1',
        '15C5097d' => '11.2b2',
        '15C5107a' => '11.2b3',
        '15C5110b' => '11.2b4',
        '15C5111a' => '11.2b5',
        '15C114' => '11.2',
        '15C153' => '11.2.1',
        '15C202' => '11.2.2',
        '15D5037e' => '11.2.5b1',
        '15D5046b' => '11.2.5b2',
        '15D5049a' => '11.2.5b3',
        '15D5054a' => '11.2.5b4',
        '15D5057a' => '11.2.5b5',
        '15D5059a' => '11.2.5b6',
        '15D60' => '11.2.5',
        '15D100' => '11.2.6',
        '15E5167f' => '11.3b1',
        '15E5178f' => '11.3b2',
        '15E5189f' => '11.3b3',
        '15E5201e' => '11.3b4',
        '15E5211a' => '11.3b5',
        '15E5216a' => '11.3b6',
        '15E148' => '11.3',
        '15E216' => '11.3',
        '15E218' => '11.3',
        '15F5037c' => '11.4b1',
        '15F5049c' => '11.4b2',
        '15F5061d' => '11.4b3',
        '15F5061e' => '11.4b3',
        '15F5071a' => '11.4b4',
        '15F5077a' => '11.4b5',
        '15F5079a' => '11.4b6',
        '15F79' => '11.4',
        '15G5054c' => '11.4.1b1',
        '15G5063b' => '11.4.1b2',
        '15M5071b' => '11.4.1b3',
        '15G5074a' => '11.4.1b4',

        '16A5288q' => '12.0b1',
        '16A5308e' => '12.0b2',
        '16A5318d' => '12.0b3',
        '16A5327f' => '12.0b4',
        '16A5339e' => '12.0b5',
        '16A5345f' => '12.0b6',
        '16A5354b' => '12.0b7',
        '16A5357b' => '12.0b8',
        '16A5362a' => '12.0b9',
        '16A5364a' => '12.0b10',
        '16A5365b' => '12.0b11',
        '16A366' => '12.0',
        '16B5059d' => '12.1b1',
        '16B5068i' => '12.1b2',
        '16A404' => '12.0.1',
        '16A405' => '12.0.1',
        '16B5077c' => '12.1b3',
        '16B5084a' => '12.1b4',
        '16B5089b' => '12.1b5',
        '16C5036c' => '12.1.1b1',
        '16C5043b' => '12.1.1b2',
        '16C5050a' => '12.1.1b3',
        '16C50' => '12.1.1',
        '16D5024a' => '12.1.2b1',
        '16C101' => '12.1.2',
        '16C104' => '12.1.2',
        '16D5032a' => '12.1.3b2',
        '16D5037a' => '12.1.3b3',
        '16D5039a' => '12.1.3b4',
        '16D39' => '12.1.3',
        '16D40' => '12.1.3',
        '16E5181f' => '12.2b1',
        '16E5191d' => '12.2b2',
        '16D57' => '12.1.4',
        '16E5201e' => '12.2b3',
        '16E5212f' => '12.2b4',
        '16E5223a' => '12.2b5',
        '16E5227a' => '12.2b6',
        '16E227' => '12.2',
        '16F5117h' => '12.3b1',
        '16F5129d' => '12.3b2',
        '16F5139e' => '12.3b3',
        '16F5148a' => '12.3b4',
        '16F5155a' => '12.3b5',
        '16F5156a' => '12.3b6',
        '16F156' => '12.3',
        '16F203' => '12.3.1',
        '16F250' => '12.3.2',
        '16G5027g' => '12.4b1',
        '16G5027i' => '12.4b2',
        '16G5038d' => '12.4b3',
        '16G5046d' => '12.4b4',
        '16G5056d' => '12.4b5',
        '16G77' => '12.4',
        '16G102' => '12.4.1',

        '17A5492t' => '13.0b1',
        '17A5508m' => '13.0b2',
        '17A5522f' => '13.0b3',
        '17A5534f' => '13.0b4',
        '17A5547d' => '13.0b5',
        '17A5556d' => '13.0b6',
        '17A5565b' => '13.0b7',
        '17A5572a' => '13.0b8',
        '17A577' => '13.0',

        '17A5821e' => '13.1b1',
        '17A5831c' => '13.1b2',
        '17A5837a' => '13.1b3',
        '17A5844a' => '13.1b4',

        '17A844' => '13.1',
        '17A854' => '13.1.1',
        '17A860' => '13.1.2',
        '17A861' => '13.1.2',
        '17A878' => '13.1.3',

        '17B5059g' => '13.2b1',
        '17B5068e' => '13.2b2',
        '17B5077a' => '13.2b3',

        '17B84' => '13.2',
        '17B90' => '13.2.1',
        '17B102' => '13.2.2',
        '17B1111' => '13.2.3',

        '17C5032d' => '13.3b1',
        '17C5038a' => '13.3b2',
        '17C5046a' => '13.3b3',
        '17C5053a' => '13.3b4',

        '17C54' => '13.3',

        '17D5026c' => '13.3.1b1',
        '17D5044a' => '13.3.1b2',
        '17D5050a' => '13.3.1b3',

        '17D50' => '13.3.1',

        '17E5223h' => '13.4b1',
        '17E5233g' => '13.4b2',
        '17E5241d' => '13.4b3',
        '17E5249a' => '13.4b4',
        '17E5255a' => '13.4b5',
        '17E5255' => '13.4b6',

        '17E255' => '13.4',
        '17E8258' => '13.4.1',
        '17E262' => '13.4.1',

        '17F5034c' => '13.5b1',
        '17F5044d' => '13.5b2',
        '17F5054h' => '13.5b3',
        '17F5065a' => '13.5b4',

        '17F75' => '13.5',
        '17F80' => '13.5.1',

        '17G5035d' => '13.6b1',
        '17G5045c' => '13.6b2',
        '17G5059c' => '13.6b3',

        '17G68' => '13.6',
        '17G80' => '13.6.1',
        '17H33' => '13.7',

        '18A5301v' => '14.0b1',
        '18A5319i' => '14.0b2',
        '18A5332f' => '14.0b3',
        '18A5342e' => '14.0b4',
        '18A5351d' => '14.0b5',
        '18A5357e' => '14.0b6',
        '18A5369b' => '14.0b7',
        '18A5373a' => '14.0b8',

        '18A373' => '14.0',
        '18A393' => '14.0.1',
        '18A8395' => '14.1',

        '18B5052h' => '14.2b1',
        '18B5061e' => '14.2b2',
        '18B5072f' => '14.2b3',
        '18B5083a' => '14.2b4',
        '18B91' => '14.2rc',

        '18B92' => '14.2',
        '18B111' => '14.2',
        '18B121' => '14.2.1',

        '18C5044f' => '14.3b1',
        '18C5054c' => '14.3b2',
        '18C5061a' => '14.3b3',
        '18C65' => '14.3rc',

        '18C66' => '14.3',

        '18D5030e' => '14.4b1',
        '18D5043d' => '14.4b2',

        '18D52' => '14.4',
        '18D61' => '14.4.1',
        '18D70' => '14.4.2',

        '18E5140j' => '14.5b1',
        '18E5140k' => '14.5b1',
        '18E5154f' => '14.5b2',
        '18E5164h' => '14.5b3',
        '18E5178a' => '14.5b4',
        '18E5186a' => '14.5b5',
        '18E5194a' => '14.5b6',
        '18E5198a' => '14.5b7',
        '18E5199a' => '14.5b8',

        '18E199' => '14.5',
        '18E212' => '14.5.1',

        '18F5046f' => '14.6b1',
        '18F5055b' => '14.6b2',
        '18F5065a' => '14.6b3',
        '18F71' => '14.6rc',

        '18F72' => '14.6',

        '18G5023c' => '14.7b1',
        '18G5033e' => '14.7b2',
        '18G5042c' => '14.7b3',
        '18G5052d' => '14.7b4',
        '18G5063a' => '14.7b5',
        '18G68' => '14.7rc',

        '18G69' => '14.7',
        '18G82' => '14.7.1',
        '18H17' => '14.8',

        '19A5261w' => '15.0b1',
        '19A5281h' => '15.0b2',
        '19A5281j' => '15.0b2',
        '19A5297e' => '15.0b3',
        '19A5307g' => '15.0b4',
        '19A5318f' => '15.0b5',
        '19A5325f' => '15.0b6',
        '19A5337a' => '15.0b7',
        '19A5340a' => '15.0b8',
        '19A344' => '15.0rc',

        '19A346' => '15.0',
        '19A348' => '15.0.1',
        '19A404' => '15.0.2',

        '19B5042h' => '15.1b1',
        '19B5052f' => '15.1b2',
        '19B5060d' => '15.1b3',
        '19B5068a' => '15.1b4',

        '19B74' => '15.1',
        '19B75' => '15.1',

        '19C5026i' => '15.2b1',
        '19C5036e' => '15.2b2',
        '19C5044b' => '15.2b3',
        '19C5050b' => '15.2b4',

        '19C56' => '15.2',
        '19C63' => '15.2.1',

        '19D5026g' => '15.3b1',
        '19D5040e' => '15.3b2',

        '19D49' => '15.3rc',

        '19D50' => '15.3',
        '19D52' => '15.3.1',

        '19E5209h' => '15.4b1',
        '19E5219e' => '15.4b2',
        '19E5225g' => '15.4b3',
        '19E5235a' => '15.4b4',
        '19E5241a' => '15.4b5',

        '19E241' => '15.4',
        '19E258' => '15.4.1',

        '19F5047e' => '15.5b1',
        '19F5057e' => '15.5b2',
        '19F5062g' => '15.4b3',
        '19F5070b' => '15.5b4',

        '19F77' => '15.5',

        '19G5027e' => '15.6b1',
        '19G5037d' => '15.6b2',
        '19G5046d' => '15.6b3',
        '19G5056c' => '15.6b4',
        '19G5063a' => '15.6b5',

        '19G69' => '15.6rc',

        '19G71' => '15.6',
        '19G82' => '15.6.1',

        '19H12' => '15.7',

        '19H115' => '15.7.1rc',

        '19H117' => '15.7.1',
        '19H218' => '15.7.2',
        '19H307' => '15.7.3',
        '19H321' => '15.7.4',
        '19H332' => '15.7.5',
        '19H349' => '15.7.6',
        '19H357' => '15.7.7',
        '19H364' => '15.7.8',

        '20A5283p' => '16.0b1',
        '20A5303i' => '16.0b2',
        '20A5312g' => '16.0b3',
        '20A5312j' => '16.0b3',
        '20A5328h' => '16.0b4',
        '20A5339d' => '16.0b5',
        '20A5349b' => '16.0b6',
        '20A5356a' => '16.0b7',
        '20A5358a' => '16.0b8',

        '20A362' => '16.0',
        '20A380' => '16.0.2',
        '20A392' => '16.0.3',

        '20B5045d' => '16.1b1',
        '20B5050f' => '16.1b2',
        '20B5056e' => '16.1b3',
        '20B5064c' => '16.1b4',
        '20B5072b' => '16.1b5',

        '20B79' => '16.1rc',

        '20B82' => '16.1',
        '20B101' => '16.1.1',
        '20B110' => '16.1.2',

        '20C5032e' => '16.2b1',
        '20C5043e' => '16.2b2',
        '20C5049e' => '16.2b3',
        '20C5058d' => '16.2b4',

        '20C65' => '16.2',

        '20D5024e' => '16.3b1',
        '20D5035i' => '16.3b2',

        '20D47' => '16.3',
        '20D67' => '16.3.1',

        '20E5212f' => '16.4b1',
        '20E5223e' => '16.4b2',
        '20E5229e' => '16.4b3',
        '20E5239b' => '16.4b4',

        '20E246' => '16.4rc',

        '20E247' => '16.4',
        '20E252' => '16.4.1',

        '20F5028e' => '16.5b1',
        '20F5039e' => '16.5b2',
        '20F5050f' => '16.5b3',
        '20F5059a' => '16.5b4',

        '20F65' => '16.5rc',

        '20F66' => '16.5',
        '20F75' => '16.5.1',

        '20G5026e' => '16.6b1',
        '20G5037d' => '16.6b2',
        '20G5047d' => '16.6b3',
        '20G5058d' => '16.6b4',
        '20G5070a' => '16.6b5',

        '20G75' => '16.6',

        '21A5248v' => '17.0b1',
        '21A5268h' => '17.0b2',
        '21A5277h' => '17.0b3',
        '21A5277j' => '17.0b3',
        '21A5291h' => '17.0b4',
    ];
}
