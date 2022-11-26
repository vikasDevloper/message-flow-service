<?php


namespace App\Controller;

use App\Entity\Messages;
use App\Repository\MessagesRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class MessagesController extends AbstractController
{
    private $messagesRepository;

    public function __construct(MessagesRepository $messagesRepository)
    {
        $this->messagesRepository = $messagesRepository;
    }

    /**
     * @Route("/messages", name="messages", methods={"POST"})
     */
    public function messages(Request $request): JsonResponse
    {
 
        $data = json_decode($request->getContent(), true);

        $objectManager = $this->getDoctrine()->getManager();
        $uniqueId = $this->createMongoDbLikeId(time(), php_uname('n'), getmypid());
        return $this->json([$uniqueId]);
        foreach($data as $msgData){
                    $sender_to = $msgData['data']['to'];
                    $sender_from = $msgData['data']['from'];
                    $content = $msgData['data']['message']['content'];
                    $sender_id = $uniqueId;
                    $message = new Messages;
                    
                    $message
                    ->setSenderId($sender_id)
                    ->setSenderTo($sender_to)
                    ->setSenderFrom($sender_from)
                    ->setContent($content);
                    $this->messagesRepository->add($message);

        }
               
        
        $objectManager->flush();
        return $this->json([
            'message' => 'Welcome to your new controller!'
    
        ]);

        $sender_to = $data['sender_to'];
        $sender_from = $data['sender_from'];
        $content = $data['content'];
        $sender_id = $data['sender_id'];
        $newMessage = new Messages;

        $newMessage
        ->setSenderId($sender_id)
        ->setSenderTo($sender_to)
        ->setSenderFrom($sender_from)
        ->setContent($content);

         $objectManager->persist($newMessage);

        $objectManager->flush();

 
        if (empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber)) {
            //throw new NotFoundHttpException('Expecting mandatory parameters!');
        }
       
        $this->messagesRepository->add($sender_to, $sender_from, $content, $sender_id);
        return $this->json([
            'message' => 'Welcome to your new controller!'
  
        ]);
        return new JsonResponse(['status' => 'Messages created!'], Response::HTTP_CREATED);
    }

    /**
     * @Route("/messages/{id}/recipients", name="/messages/{id}/recipientss", methods={"GET"})
     */
    public function get($id): JsonResponse
    {
        $messagesDetaails = $this->messagesRepository->findDetailById($id);

        $data['data'] = [
            'recipients' => $messagesDetaails
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

       /**
     * @Route("/messages/{id}/recipients/{toId}", name="get_messages", methods={"GET"})
     */
    public function getBySenderID($id,$toId): JsonResponse
    {
        $messagesRepository = $this->messagesRepository->findOneBySenderId($id,$toId);

        $data['data'] = [
            'messages' => $messagesRepository,
            'count' =>count($messagesRepository)
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/test2", name="test2")
     * GET /messages/010cc5dc-51ee-4da0-a5e3-9cd704fc9be6/recipients/8a7290c4-970d-4285-b18d-d62b581f2061
     */
    public function test2(){
        return $this->json([
            'message' => 'Welcome to your new controller!'
  
        ]);
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

?>