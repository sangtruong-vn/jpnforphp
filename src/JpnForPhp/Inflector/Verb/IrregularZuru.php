<?php

/*
 * This file is part of the JpnForPhp package.
 *
 * (c) Matthieu Bilbille
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JpnForPhp\Inflector\Verb;

use JpnForPhp\Helper\Helper;
use JpnForPhp\Analyzer\Analyzer;
use JpnForPhp\Inflector\Inflector;
use JpnForPhp\Inflector\Entry;

/**
 * Irregular conjugation of "zuru" verb (alternative form of -jiru verbs).
 *
 * @author Matthieu Bilbille (@mbibille)
 */
class IrregularZuru extends AbstractVerb
{

  protected $conjugationMap = array(
      // 'xx' => array(MIZENKEI, RENYOUKEI, SHUUSHIKEI, RENTAIKEI, KATEIKEI, MEIREIKEI);
      'vz' => array('じ|ぜ', 'じ', 'ずる', 'ずる', 'ずれ', 'じろ'),
  );

  protected $alternativeConjugationRules = array(
      // verbal_form => array(PLAIN, POLITE, PLAIN_NEGATIVE, POLITE_NEGATIVE)
      Inflector::POTENTIAL_FORM => array(1, 1, 1, 1),
      Inflector::PASSIVE_FORM => array(1, 1, 1, 1),
      Inflector::CAUSATIVE_FORM => array(1, 1, 1, 1),
      Inflector::CAUSATIVE_ALT_FORM => array(1, 0, 0, 0),
      Inflector::CAUSATIVE_PASSIVE_FORM => array(1, 1, 1, 1)
  );

  protected $suffixMap = array(
      // verbal_form => array(PLAIN, POLITE, PLAIN_NEGATIVE, POLITE_NEGATIVE)
      Inflector::NON_PAST_FORM => array('', 'ます', 'ない', 'ません'),
      Inflector::PAST_FORM => array('た', 'ました', 'なかった', 'ませんでした'),
      Inflector::TE_FORM => array('て', 'まして', null, null),
      Inflector::PASSIVE_FORM => array('られる', 'られます', 'られない', 'られません'),
      Inflector::CAUSATIVE_FORM => array('させる', 'させます', 'させない', 'させません'),
      Inflector::CAUSATIVE_ALT_FORM => array('す', null, null, null),
      Inflector::CAUSATIVE_PASSIVE_FORM => array('せられる', 'せられます', 'せられない', 'せられません'),
      Inflector::POTENTIAL_FORM => array('られる', 'られます', 'られない', 'られません'),
      Inflector::PROVISIONAL_CONDITIONAL_FORM => array('ば', null, 'なければ', null),
      Inflector::CONDITIONAL_FORM => array('たら', 'ましたら', 'なかったら', 'ませんでしたら'),
      Inflector::IMPERATIVE_FORM => array('', 'てください', 'ませ', 'ないでください'),
      Inflector::COMMAND_FORM => array('なさい', null, 'な', null),
      Inflector::VOLITIONAL_FORM => array('よう', 'ましょう', null, null),
      Inflector::GERUND_FORM => array('ながら', null, null, null),
      Inflector::OPTATIVE_FORM => array('たい', null, 'たくない', null)
  );


  function __construct(Entry $entry) {
    parent::__construct($entry);

    $this->stem[Inflector::KANJI_FORM] = Helper::subString($entry->getKanji(), 0, Analyzer::length($entry->getKanji()) - 2);
    $this->stem[Inflector::KANA_FORM] = Helper::subString($entry->getKana(), 0, Analyzer::length($entry->getKana()) - 2);
  }

  // Override `getConjugation`
  public function getConjugation($transliterationForm, $conjugatedForm, $verbalForm, $languageForm)
  {
    if($verbalForm === Inflector::POTENTIAL_FORM) {
      $conjugatedForm = Inflector::MIZENKEI;
    }

    return parent::getConjugation($transliterationForm, $conjugatedForm, $verbalForm, $languageForm);
  }
}
