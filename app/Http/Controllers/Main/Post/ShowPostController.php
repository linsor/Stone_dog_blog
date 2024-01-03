<?php

namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Post;
use DOMDocument;
use DOMXPath;



class ShowPostController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::find($id);
        $games = Game::all();
        $tags = $post->tags;


        try {
            var_dump('На вашей конфигурации игра пойдет с таким FPS: ' . $this->parsePostostGavna());
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }

        return view('post.show', compact('post', 'games', 'tags'));
    }
    private function testGavna($endpoint, $method)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.notebookcheck.net/Computer-Games-on-Laptop-Graphics-Cards.13849.0.html{$endpoint}",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $method,
    ));

    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if ($response === false) {
        // Обработка ошибок curl
        $result = array(
            'status' => 'error',
            'message' => 'Curl error: ' . curl_error($curl)
        );
    } else {
        $result = array(
            'status' => 'success',
            'http_code' => $httpCode,
            'response' => $response
        );
    }

    curl_close($curl);

    return $result;
}

    private function postGavna()
    {
        $gpu = 'AMD+Radeon+RX+6800S';
        $gameId = '329';
        $endpoint = "?type=&sort=&search={$gpu}&or=0&gameselect+5B+5D={$gameId}";

        $response = $this->testGavna($endpoint, 'GET');

        if ($response['status'] !== 'success') {
            throw new \Exception('Bad config request! Enter right format.');
        }
        
        return $response;
    }

    private function parsePostostGavna(): string
    {
        $data = $this->postGavna();

        $dom = new DOMDocument;
        libxml_use_internal_errors(true); 
        $dom->loadHTML($data['response']);
        libxml_use_internal_errors(false);

        $xpath = new DOMXPath($dom);

        $element = $xpath->query('//span[@class="bl_med_val_329_888"]')->item(0);

        

        if ($element) {
            $parsedValue = $element->nodeValue;

            $selectElement = $xpath->query('//*[@id="bl_gameselect"]')->item(0);

        if ($selectElement) {
            $options = $xpath->query('option', $selectElement);

            $values = [];

            foreach ($options as $option) {
                $values[] = $option->getAttribute('value');
            }

        }

            return $parsedValue;
        } else { 
            throw new \Exception('Serched element not found!');
        }

        

    }
}

