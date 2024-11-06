// import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import dashboard from './components/dashboard';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

// Register any Alpine directives, components, or plugins here...
Alpine.data('dashboard', dashboard);

Livewire.start()