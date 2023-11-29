import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { UsesComponent } from './uses/uses.component';
import { ContactComponent } from './contact/contact.component';

const routes: Routes = [

  {
    path: '',
    component: HomeComponent
  },
  {
    path: 'uses',
    component: UsesComponent
  },
  {
    path: 'contact',
    component: ContactComponent
  },

  { path: '**', redirectTo: '' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
