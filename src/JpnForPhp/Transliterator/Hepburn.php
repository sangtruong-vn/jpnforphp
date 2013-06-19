<?php

/*
 * This file is part of the JpnForPhp package.
 *
 * (c) Matthieu Bilbille
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JpnForPhp\Transliterator;

/**
 * Hepburn romanization system class
 */
class Hepburn extends Romanization
{
    /**
     * Hepburn's constructor
     */
    public function __construct()
    {
        $this->mapKana = array(
            'あ' => 'a', 'い' => 'i', 'う' => 'u', 'え' => 'e', 'お' => 'o',
            'か' => 'ka', 'き' => 'ki', 'く' => 'ku', 'け' => 'ke', 'こ' => 'ko',
            'さ' => 'sa', 'し' => 'shi', 'す' => 'su', 'せ' => 'se', 'そ' => 'so',
            'た' => 'ta', 'ち' => 'chi', 'つ' => 'tsu', 'て' => 'te', 'と' => 'to',
            'な' => 'na', 'に' => 'ni', 'ぬ' => 'nu', 'ね' => 'ne', 'の' => 'no',
            'は' => 'ha', 'ひ' => 'hi', 'ふ' => 'fu', 'へ' => 'he', 'ほ' => 'ho',
            'ま' => 'ma', 'み' => 'mi', 'む' => 'mu', 'め' => 'me', 'も' => 'mo',
            'や' => 'ya', 'ゆ' => 'yu', 'よ' => 'yo',
            'ら' => 'ra', 'り' => 'ri', 'る' => 'ru', 'れ' => 're', 'ろ' => 'ro',
            'わ' => 'wa', 'ゐ' => 'wi', 'ゑ' => 'we', 'を' => 'wo',
            'ん' => 'n',
            'が' => 'ga', 'ぎ' => 'gi', 'ぐ' => 'gu', 'げ' => 'ge', 'ご' => 'go',
            'ざ' => 'za', 'じ' => 'ji', 'ず' => 'zu', 'ぜ' => 'ze', 'ぞ' => 'zo',
            'だ' => 'da', 'ぢ' => 'ji', 'づ' => 'zu', 'で' => 'de', 'ど' => 'do',
            'ば' => 'ba', 'び' => 'bi', 'ぶ' => 'bu', 'べ' => 'be', 'ぼ' => 'bo',
            'ぱ' => 'pa', 'ぴ' => 'pi', 'ぷ' => 'pu', 'ぺ' => 'pe', 'ぽ' => 'po',
            'ゔ' => 'vu',
            'きゃ' => 'kya', 'きゅ' => 'kyu', 'きょ' => 'kyo',
            'しゃ' => 'sha', 'しゅ' => 'shu', 'しょ' => 'sho',
            'ちゃ' => 'cha', 'ちゅ' => 'chu', 'ちょ' => 'cho',
            'にゃ' => 'nya', 'にゅ' => 'nyu', 'にょ' => 'nyo',
            'ひゃ' => 'hya', 'ひゅ' => 'hyu', 'ひょ' => 'hyo',
            'みゃ' => 'mya', 'みゅ' => 'myu', 'みょ' => 'myo',
            'りゃ' => 'rya', 'りゅ' => 'ryu', 'りょ' => 'ryo',
            'ぎゃ' => 'gya', 'ぎゅ' => 'gyu', 'ぎょ' => 'gyo',
            'じゃ' => 'ja', 'じゅ' => 'ju', 'じょ' => 'jo',
            'ぢゃ' => 'ja', 'ぢゅ' => 'ju', 'ぢょ' => 'jo',
            'びゃ' => 'bya', 'びゅ' => 'byu', 'びょ' => 'byo',
            'ぴゃ' => 'pya', 'ぴゅ' => 'pyu', 'ぴょ' => 'pyo',
            'んあ' => "n'a", 'んい' => "n'i", 'んう' => "n'u", 'んえ' => "n'e", 'んお' => "n'o",
            'んや' => "n'ya", 'んゆ' => "n'yu", 'んよ' => "n'yo",
            'いぃ' => 'yi', 'いぇ' => 'ye',
            'うぃ' => 'wi', 'うぅ' => 'wu', 'うぇ' => 'we', 'うぉ' => 'wo',
            'うゃ' => 'wya',
            'ぶぁ' => 'va', 'ぶぃ' => 'vi', 'ぶぇ' => 've', 'ぶぉ' => 'vo',
            'ぶゃ' => 'vya', 'ぶゅ' => 'vyu', 'ぶぃぇ' => 'vye', 'ぶょ' => 'vyo',
            'きぇ' => 'kye',
            'ぎぇ' => 'gye',
            'くぁ' => 'kwa', 'くぃ' => 'kwi', 'くぇ' => 'kwe', 'くぉ' => 'kwo',
            'ぐぁ' => 'gwa', 'ぐぃ' => 'gwi', 'ぐぇ' => 'gwe', 'ぐぉ' => 'gwo',
            'しぇ' => 'she',
            'じぇ' => 'je',
            'すぃ' => 'si',
            'ずぃ' => 'zi',
            'ちぇ' => 'che',
            'つぁ' => 'tsa', 'つぃ' => 'tsi', 'つぇ' => 'tse', 'つぉ' => 'tso',
            'つゅ' => 'tsyu',
            'てぃ' => 'ti', 'てぅ' => 'tu',
            'てゅ' => 'tyu',
            'でぃ' => 'di', 'でぅ' => 'du',
            'でゅ' => 'dyu',
            'にぇ' => 'nye',
            'ひぇ' => 'hye',
            'びぇ' => 'bye',
            'ぴぇ' => 'pye',
            'ふぁ' => 'fa', 'ふぃ' => 'fi', 'ふぇ' => 'fe', 'フふぉ' => 'fo',
            'ふゃ' => 'fya', 'ふゅ' => 'fyu', 'ふぃぇ' => 'fye', 'ふょ' => 'fyo',
            'ほぅ' => 'hu',
            'みぇ' => 'mye',
            'りぇ' => 'rye',
        ) + $this->mapPunctuationMarks;
    }
        
    /**
     * Implements __toString().
     *
     * @see RomanizationInterface
     */
    public function __toString()
    {
        return 'Hepburn romanization system (ヘボン式ローマ字)';
    }

    /**
     * Implements transliterate();
     *
     * @see RomanizationInterface
     */
    public function transliterate($str)
    {
        $str = $this->escapeLatinCharacters($str);
        $kana = mb_convert_kana($str, 'c', 'UTF-8');
        $output = strtr($kana, $this->mapKana);
        $output = $this->transliterateSokuon($output);
        $output = $this->transliterateChoonpu($output);
        $output = $this->convertLongVowels($output);
        $output = $this->convertParticles($output);
        $output = $this->unescapeLatinCharacters($output);
    
        return $output;
    }

    /**
     * Overrides transliterateSokuon().
     *
     * @see Romanization
     */
    protected function transliterateSokuon($str, $syllabary = Transliterator::HIRAGANA)
    {
        $output = parent::transliterateSokuon($str, $syllabary);

        // As per Hepburn system ch > tch
        // (http://en.wikipedia.org/wiki/Hepburn_romanization#Double_consonants)
        return str_replace('cch', 'tch', $output);
    }

    /**
     * Overrides transliterateChoonpu().
     *
     * @see Romanization
     */
    protected function transliterateChoonpu($str)
    {
        $macrons = array(
            'a' => 'ā',
            'i' => 'ī',
            'u' => 'ū',
            'e' => 'ē',
            'o' => 'ō',
        );

        return preg_replace('/([aiueo])' . Transliterator::CHOONPU . '/ue', '$macrons[\'${1}\']', $str);
    }

    /**
     * Overrides convertLongVowels().
     *
     * @see Romanization
     *
     * This is a minimalist implementation of Hepburn's rules. For a detailed
     * explanation please refer to:
     *  - http://en.wikipedia.org/wiki/Hepburn_romanization#Long_vowels
     */
    protected function convertLongVowels($str)
    {
        $search = array('aa', 'uu', 'ee', 'oo', 'ou');
        $replace = array('ā', 'ū', 'ē', 'ō', 'ō');

        return str_replace($search, $replace, $str);
    }

    /**
     * Overrides convertParticles().
     *
     * @see Romanization
     */
    protected function convertParticles($str)
    {
        $search = array(' ha ', ' he ', ' wo ');
        $replace = array(' wa ', ' e ', ' o ');

        return str_replace($search, $replace, $str);
    }
}
