<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Filechords Controller
 *
 * @property \App\Model\Table\FilechordsTable $Filechords
 */
class FilechordsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('filechords', $this->paginate($this->Filechords->find('all', ['order' => ['Filechords.created' => 'DESC'], 'limit' => 20])));
        $this->set('_serialize', ['filechords']);
        $this->set('pageDescription','Get lastest chords for tamil, hindi, malayalam, telugu, bollywood songs');
        $this->set('pageKey','Get lastest chords');
    }

    public function browse($string = null)
    {
        if (is_null($string)) {
            $this->set('filechords', $this->paginate($this->Filechords->find('all', ['order' => ['Filechords.created' => 'DESC']])));
        }elseif ($string == '0') {
            $this->set('filechords', $this->paginate(
                                               $this->Filechords->find('all',
                                                   ['conditions' => ['Filechords.song REGEXP' => '^[0-9]'],
                                                    'order' => ['Filechords.created' => 'DESC']
                                                    ])));
        }else{
            $this->set('filechords', $this->paginate(
                                               $this->Filechords->find('all',
                                                   ['conditions' => ['Filechords.song LIKE' => $string.'%'],
                                                    'order' => ['Filechords.created' => 'DESC']
                                                    ])));
        }
        $this->set('_serialize', ['filechords']);
        $this->set('pageDescription','Get lastest chords for tamil, hindi, malayalam, telugu, bollywood songs');
        $this->set('pageKey','Get lastest chords');
    }

    /**
     * View method
     *
     * @param string|null $id Filechord id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filechord = $this->Filechords->get($id, [
            'contain' => []
        ]);
        $this->set('filechord', $filechord);
        $this->set('_serialize', ['filechord']);
        $this->set('pageDescription',$filechord['song'].', '.$filechord['album'].', '.$filechord['artist']);
        $this->set('pageKey',$filechord['song'].', '.$filechord['album'].', '.$filechord['artist']);
    }

    public function album($album = null)
    {
      $this->set('filechords', $this->paginate($this->Filechords->find('all',
                                             ['conditions' => ['Filechords.album' => $album],
                                              'order' => ['Filechords.id' => 'DESC']
                                              ])));
      $this->set('_serialize', ['filechords']);
      $this->set('pageDescription','Get lastest chords for tamil, hindi, malayalam, telugu, bollywood songs');
      $this->set('pageKey','Get lastest chords');
    }
}