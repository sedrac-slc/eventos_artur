<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enum\UserTypeEnum;

use App\Models\{
    User,
    TipoEvento,
    Evento,
    Material,
    MaterialTipoEvento,
    Aluguer
};
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{

        $userOne = User::create([
            'name' => "Sabino Hossi", 'email' => "sabinohossi@gmail.com",  'password' => bcrypt('12345678'),
            'birthday' => '1999-02-20', 'phone' => '923789343',  'gender' => 'MALE',
            'type' =>  UserTypeEnum::ADMIN
        ]);

        $userTwo = User::create([
            'name' => "Bela Gomes", 'email' => "belagomes@gmail.com", 'password' => bcrypt('12345678'),
            'birthday' => '1999-06-21', 'phone' => '913769344', 'gender' => 'FEMALE',
            'type' => UserTypeEnum::CLIENT
        ]);

        $tipoArtistico =  TipoEvento::create(["nome" => "Artístico"]);
        $tipoReligioso =  TipoEvento::create(["nome" => "Religioso"]);
        $tipoCasamento =  TipoEvento::create(["nome" => "Casamento"]);

        $eventoOne = Evento::create([
            'tipo_evento_id' => $tipoArtistico->id,
            'nome' => 'Show da virada',
            'data_comeco' => new DateTime("2024-01-30 14:00:00"),
            'data_termino' => new DateTime("2024-01-31 16:00:00")
        ]);

        $eventoTwo = Evento::create([
            'tipo_evento_id' => $tipoReligioso->id,
            'nome' => 'Missa de Batismo de São Pedro',
            'data_comeco' => new DateTime("2024-02-10 10:00:00"),
            'data_termino' => new DateTime("2024-02-19 17:00:00")
        ]);

        $eventoThree = Evento::create([
            'tipo_evento_id' => $tipoCasamento->id,
            'nome' => 'Salão de Festa Laurinda',
            'data_comeco' => new DateTime("2024-01-26 12:30:00"),
            'data_termino' => new DateTime("2024-01-26 16:00:00")
        ]);

        $eventoFour = Evento::create([
            'tipo_evento_id' => $tipoArtistico->id,
            'nome' => 'Teatro A Obra do Além',
            'data_comeco' => new DateTime("2024-01-30 10:00:00"),
            'data_termino' => new DateTime("2024-01-31 15:00:00")
        ]);

        $eventoFive = Evento::create([
            'tipo_evento_id' => $tipoCasamento->id,
            'nome' => 'Missa de Casamento',
            'data_comeco' => new DateTime("2024-02-02 13:00:00"),
            'data_termino' => new DateTime("2024-02-02 16:00:00")
        ]);

        $materialOne = Material::create(['nome' => "Cadeira de Dior", 'quantidade' => 120]);
        $materialTwo = Material::create(['nome' => "Mesa de plástico", 'quantidade' => 100]);
        $materialThree = Material::create(['nome' => "Tanheres de Cuzinha", 'quantidade' => 60]);
        $materialFour = Material::create(['nome' => "Pratos de Vidro", 'quantidade' => 80]);

        MaterialTipoEvento::create(['tipo_evento_id' => $tipoArtistico->id, 'material_id'=> $materialOne->id, 'preco' => 15000]);
        MaterialTipoEvento::create(['tipo_evento_id' => $tipoArtistico->id, 'material_id'=> $materialTwo->id, 'preco' => 12090]);
        MaterialTipoEvento::create(['tipo_evento_id' => $tipoArtistico->id, 'material_id'=> $materialThree->id, 'preco' => 13500]);
        MaterialTipoEvento::create(['tipo_evento_id' => $tipoArtistico->id, 'material_id'=> $materialFour->id, 'preco' => 12500]);

        MaterialTipoEvento::create(['tipo_evento_id' => $tipoReligioso->id, 'material_id'=> $materialOne->id, 'preco' => 12000]);
        MaterialTipoEvento::create(['tipo_evento_id' => $tipoReligioso->id, 'material_id'=> $materialTwo->id, 'preco' => 14090]);
        MaterialTipoEvento::create(['tipo_evento_id' => $tipoReligioso->id, 'material_id'=> $materialThree->id, 'preco' => 17500]);
        MaterialTipoEvento::create(['tipo_evento_id' => $tipoReligioso->id, 'material_id'=> $materialFour->id, 'preco' => 20500]);

        MaterialTipoEvento::create(['tipo_evento_id' => $tipoCasamento->id, 'material_id'=> $materialOne->id, 'preco' => 25000]);
        MaterialTipoEvento::create(['tipo_evento_id' => $tipoCasamento->id, 'material_id'=> $materialTwo->id, 'preco' => 22000]);
        MaterialTipoEvento::create(['tipo_evento_id' => $tipoCasamento->id, 'material_id'=> $materialThree->id, 'preco' => 10500]);
        MaterialTipoEvento::create(['tipo_evento_id' => $tipoCasamento->id, 'material_id'=> $materialFour->id, 'preco' => 11500]);

        Aluguer::create(['evento_id' => $eventoOne->id,'material_id'=> $materialOne->id, 'quantidade' => 10]);
        Aluguer::create(['evento_id' => $eventoTwo->id,'material_id'=> $materialOne->id, 'quantidade' => 20]);
        Aluguer::create(['evento_id' => $eventoFive->id,'material_id'=> $materialOne->id, 'quantidade' => 13]);

        Aluguer::create(['evento_id' => $eventoThree->id,'material_id'=> $materialTwo->id, 'quantidade' => 13]);
        Aluguer::create(['evento_id' => $eventoOne->id,'material_id'=> $materialTwo->id, 'quantidade' => 10]);
        Aluguer::create(['evento_id' => $eventoFive->id,'material_id'=> $materialTwo->id, 'quantidade' => 25]);

        Aluguer::create(['evento_id' => $eventoOne->id,'material_id'=> $materialFour->id, 'quantidade' => 24]);
        Aluguer::create(['evento_id' => $eventoTwo->id,'material_id'=> $materialFour->id, 'quantidade' => 17]);
        Aluguer::create(['evento_id' => $eventoFour->id,'material_id'=> $materialFour->id, 'quantidade' => 13]);

        Aluguer::create(['evento_id' => $eventoFive->id,'material_id'=> $materialThree->id, 'quantidade' => 7]);
        Aluguer::create(['evento_id' => $eventoFour->id,'material_id'=> $materialThree->id, 'quantidade' => 12]);

    }

}
