<?php

namespace App\models;

use Akrbdk\PhpMvcCore\Model;

class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $body = '';

    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'body' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'subject' => 'Subject',
            'email' => 'Email',
            'body' => 'Body',
        ];
    }

    public function send(): bool
    {
        return true;
    }
}
