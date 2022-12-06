<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\SampleMessage;
use PhpParser\Node\Expr\Cast\Array_;
use PhpParser\Node\Expr\Cast\Object_;
use App\Entity\Messages;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use App\Repository\MessagesRepository;


final class SampleMessangeHandler implements MessageHandlerInterface
{
    public function __construct(MessagesRepository $messagesRepository)
    {
        $this->messagesRepository = $messagesRepository;
    }

    public function __invoke(SampleMessage $entity, bool $flush = true): void
    {
        // magically invoked when an instance of SampleMessage is dispatched
        // $this->_em->persist($entity);
        // if ($flush) {
        //     $this->_em->flush();
        // }

        //$objectManager = $this->getDoctrine()->getManager();
        $uniqueId = $this->createMongoDbLikeId(time(), php_uname('n'), getmypid());
        foreach($entity->getContent() as $msgData){

                    $sender_to = $msgData['data']['to'];
                    $sender_from = $msgData['data']['from'];
                    $content = $msgData['data']['message']['content'];
                    $sender_id = $uniqueId;
                    $message = new Messages;
                    
                    $message
                    ->setSenderId($sender_id)
                    ->setSenderTo($sender_to)
                    ->setSenderFrom($sender_from)
                    ->setContent($content)
                    ->setCreatedAt(date('Y-m-d H:i:s'))
                    ->setUpdatedAt(date('Y-m-d H:i:s'));
                    $this->messagesRepository->add($message);
        }
               
        print_r('Handler handled the message!');
    }

    public function createMongoDbLikeId($timestamp, $hostname, $processId)
    {
	// Building binary data.
        $bin = sprintf(
            "%s%s%s%s",
            pack('N', $timestamp),
            substr(md5($hostname), 0, 3),
            pack('n', $processId),
            substr(str_shuffle('0123456789abcdjhfkjbwbmlk'), 1, 3)
        );

        // Convert binary to hex.
        $result = '';
        for ($i = 0; $i < 12; $i++) {
            $result .= sprintf("%02x", ord($bin[$i]));
        }

        return $result;
    }

}