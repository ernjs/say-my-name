<?php

namespace Geekout\Core\Model;

use Geekout\Core\Entitie\Question\AbstractQuestion;
use Geekout\Core\Model\Answer;

/**
 * Class Answer
 *
 * @package Geekout\Core\Model
 */
class Question
{
    /** @var AbstractQuestion */
    private $question;

    /**
     * Question constructor.
     *
     * @param AbstractQuestion $question
     */
    public function __construct(AbstractQuestion $question)
    {
        $this->question = $question;
    }
}