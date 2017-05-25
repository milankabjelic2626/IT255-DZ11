import { Routes, RouterModule } from '@angular/router';

import { DodajJeloComponent } from './dodajJelo/dodajJelo.component';
import { HomeComponent } from './home/home.component';

export const ROUTES: Routes = [
  { path: '', component: HomeComponent },
  { path: 'dodaj', component: DodajJeloComponent },
];