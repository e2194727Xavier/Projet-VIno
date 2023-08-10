@if($renamingInProgress)
<p>Le changement de nom est en cours...</p>
@endif
@livewire('layouts.button', 
['label' => 'Renommer mon cellier 1',
 'class' => 'uppercase bg-gold  rounded-lg items-center px-4 py-8',
 'action' =>'rename',])