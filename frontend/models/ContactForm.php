<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 * @var string $name
 * @var string $email
 * @var string $phone
 * @var string $message
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $message;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'phone', 'message'], 'required'],
            // email has to be a valid email address
            ['email', 'email']
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->phone)
            ->setTextBody($this->message)
            ->send();
    }
}
