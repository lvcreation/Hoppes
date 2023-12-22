@extends('layouts.master')
@section('titre-admin')
    Payement
@endsection
@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Affichage Ecolage</h4>
          @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
            @endif
                
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th> #</th>
                        <th>Mois 1</th>
                        <th>Mois 2</th>
                        <th>Mois 3</th>
                        <th>Mois 4</th>
                        <th>Mois 5</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($ecolage as $ecola)
                   <tr>
                       <td class="alert alert-warning text-center text-white"></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td>
                         <a href="" class="btn btn-outline-primary">Modifier</a>
                         <a href="" class="btn btn-outline-danger" id="btn" onclick="suppr()" >Supprimer</a>
                       </td>
                   </tr>                                     
                   @endforeach
                  
                    
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h4 class="text-right mt-3"></h4>
    </div>
@endsection