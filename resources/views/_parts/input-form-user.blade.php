@php use App\Enum\UserTypeEnum; @endphp
<div class="row">
    <div class="col-md-6">
        @include('components.input-text',['name'=>'name','text'=>'Digita o seu nome:'])
    </div>
    <div class="col-md-6">
        @include('components.input-email',['name'=>'email','text'=>'Digita o seu email:'])
    </div>
    <div class="col-md-6">
        @include('components.input-text',['name'=>'phone','text'=>'Digita o seu contacto:','icon'=>'fa-solid fa-phone'])
    </div>
    <div class="col-md-6">
        @include('components.input-date',['name'=>'birthday','text'=>'Digita o seu aniversário:'])
    </div>
    <div class="col-md-6">
        @include('components.input-password',['name'=>'password','text'=>'Digita a sua senha:'])
    </div>
    <div class="col-md-6">
        @include('components.input-password',['name'=>'confirm_password','text'=>'Confirma a senha:'])
    </div>
    @isset($type)
        @switch($type)
            @case(UserTypeEnum::CLIENT)
            @case(UserTypeEnum::ADMIN)
                    @include('components.input-hidden',['name'=>'type', 'value' => $type])
                @break
            @default
        @endswitch
    @else
        @include('components.select',['name'=>"type", 'options' => UserTypeEnum::values() ])
    @endisset
</div>
