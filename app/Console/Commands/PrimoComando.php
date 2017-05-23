<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrimoComando extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laramind:esempio {nome} {--formatoOutput=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'esempio di come creare un comando artisan';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()


    {


        $formato=$this->option('formatoOutput');
        $this->comment('hai indicato un foramto='.$formato);



        //visualizza un messaggio
        $this->info('benvenuti al primo comando');

        //recuperiamo il valore dei parametri in ingresso
        $nome = $this->argument('nome');

        //visualizza un messaggio colore bianco
        $this->line('Ciao utente:' . $nome);

        $this->error('si è verificato un errore');

        $this->comment('sono un commento');

        $this->question('Ciao ho un messaggio per te');

        if ($risposta = $this->confirm('vuoi cancellare i file'))
        {
            $this->comment('Allora cancello tutti i file');
        }

        $arElencoBrand = ['vanity', 'gente', 'gioia'];

        $suggest = $this->anticipate('Di qual brand ti vuoi occupare?', $arElencoBrand);

        $brand = $this->choice('schegli il brand che ti piace di più', $arElencoBrand);
        $this->line('hai scelto '.$brand);

    }
}
