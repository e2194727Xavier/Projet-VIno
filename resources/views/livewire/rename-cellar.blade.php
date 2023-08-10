
@if($showInput)
@livewire('layouts.button', 
    ['label' => 'Enregistrer',
     'class' => 'uppercase font-semibold text-sm bg-gold rounded-lg p-2',
     'action' =>'rename'])
@elseif(!$showInput)
    @livewire('layouts.button', 
    ['label' => 'renommer',
     'class' => 'uppercase font-semibold text-sm bg-gold rounded-lg p-2',
     'action' =>'startRename'])
@endif

