@php use App\Enum\UserTypeEnum; @endphp
@php use App\Enum\UserGenderEnum; @endphp
<div class="row">
    <div class="col-md-12 p-1">
        <div class="d-flex gap-3">
            @isset($disabledImage)
                <div class="d-flex align-items-center gap-1" id="disabledPanel">
                    <input class="form-check" type="checkbox" name="" id="active-img" value="0">
                    <label for="active-img" class="form-label mt-1">Alterar imagem</label>
                </div>
            @endisset
            @isset($password_disabled)
                <div class="d-flex align-items-center gap-1" id="disabledPassword">
                    <input class="form-check" type="checkbox" name="" id="check-password" value="0">
                    <label for="check-password" class="form-label mt-1">Alterar palavra-passe</label>
                </div>
            @endisset
        </div>
    </div>
    <div class="col-md-12 p-1">
        @include('components.input-file', [
            'name' => 'image',
            'text' => 'Escolha a imagem:',
            'value' => $user->image ?? '',
            'disabled' => $disabledImage ?? null,
        ])
    </div>
</div>
<div class="row">
    <div class="col-md-6 p-1">
        @include('components.input-text', [
            'name' => 'name',
            'text' => 'Digita o seu nome:',
            'value' => $user->name ?? '',
        ])
    </div>
    <div class="col-md-6 p-1">
        @include('components.input-email', [
            'name' => 'email',
            'text' => 'Digita o seu email:',
            'value' => $user->email ?? '',
        ])
    </div>
    <div class="col-md-6 p-1">
        @include('components.input-text', [
            'name' => 'phone',
            'text' => 'Digita o seu contacto:',
            'icon' => 'fa-solid fa-phone',
            'value' => $user->phone ?? '',
        ])
    </div>
    <div class="col-md-6 p-1">
        @include('components.input-date', [
            'name' => 'birthday',
            'text' => 'Digita o seu aniversário:',
            'value' => $user->birthday ?? '',
        ])
    </div>
    @if (!isset($password_hidden))
        <div class="col-md-6 p-1">
            @include('components.input-password', [
                'name' => 'password',
                'text' => 'Digita a sua senha:',
                'disabled' => $password_disabled ?? null,
            ])
        </div>
        <div class="col-md-6 p-1">
            @include('components.input-password', [
                'name' => 'confirm_password',
                'text' => 'Confirma a senha:',
                'disabled' => $password_disabled ?? null,
            ])
        </div>
    @endif
    <div class="col-md-6 p-1">
        @include('components.select', [
            'name' => 'gender',
            'text' => 'Escolha o seu gênero:',
            'value' => $user->gender ?? '',
            'options' => UserGenderEnum::values(),
            'icon' => 'fa-solid fa-venus-mars'
        ])
    </div>
    <div class="col-md-6 p-1">
        @isset($type)
            @switch($type)
                @case(UserTypeEnum::CLIENT)
                @case(UserTypeEnum::ADMIN)
                    @include('components.input-hidden', ['name' => 'type', 'value' => $type])
                @break

                @default
            @endswitch
        @else
            @include('components.select', [
                'name' => 'type',
                'text' => 'Escolha o cargo',
                'value' => $user->type ?? '',
                'options' => UserTypeEnum::values(),
            ])
        @endisset
    </div>
</div>
@isset($disabledImage)
    @include('_parts.script-file')
@endisset
@isset($password_disabled)
    <script>
        (() => {
            const checkPassword = document.querySelector('#check-password');
            const inputPasswords = document.querySelectorAll('input[type="password"]');

            checkPassword.addEventListener('click', (e) => {
                if (checkPassword.checked) {
                    inputPasswords.forEach(item => {
                        item.removeAttribute('disabled')
                    });
                } else {
                    inputPasswords.forEach(item => {
                        item.setAttribute('disabled', true)
                    });
                }
            });

        })();
    </script>
@endisset
