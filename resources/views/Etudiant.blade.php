@extends('layouts.master')
@section('titre-admin')
Tableau de Bord
@endsection
@section('right-sideBar')
<div id="right-sidebar" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
      </li>
    </ul>
    <div class="tab-content" id="setting-content">
      <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
        <div class="add-items d-flex px-3 mb-0">
          <form class="form w-100">
            <div class="form-group d-flex">
              <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
              <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
            </div>
          </form>
        </div>
        <div class="list-wrapper px-3">
          <ul class="d-flex flex-column-reverse todo-list">
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox">
                  Team review meeting at 3.00 PM
                </label>
              </div>
              <i class="remove ti-close"></i>
            </li>
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox">
                  Prepare for presentation
                </label>
              </div>
              <i class="remove ti-close"></i>
            </li>
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox">
                  Resolve all the low priority tickets due today
                </label>
              </div>
              <i class="remove ti-close"></i>
            </li>
            <li class="completed">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked>
                  Schedule meeting for next week
                </label>
              </div>
              <i class="remove ti-close"></i>
            </li>
            <li class="completed">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked>
                  Project review
                </label>
              </div>
              <i class="remove ti-close"></i>
            </li>
          </ul>
        </div>
        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
        <div class="events pt-4 px-3">
          <div class="wrapper d-flex mb-2">
            <i class="ti-control-record text-primary mr-2"></i>
            <span>Feb 11 2018</span>
          </div>
          <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
          <p class="text-gray mb-0">build a js based app</p>
        </div>
        <div class="events pt-4 px-3">
          <div class="wrapper d-flex mb-2">
            <i class="ti-control-record text-primary mr-2"></i>
            <span>Feb 7 2018</span>
          </div>
          <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
          <p class="text-gray mb-0 ">Call Sarah Graves</p>
        </div>
      </div>
      <!-- To do section tab ends -->
      <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
        <div class="d-flex align-items-center justify-content-between border-bottom">
          <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
          <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
        </div>
        <ul class="chat-list">
          <li class="list active">
            <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">19 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
            <div class="info">
              <div class="wrapper d-flex">
                <p>Catherine</p>
              </div>
              <p>Away</p>
            </div>
            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
            <small class="text-muted my-auto">23 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Daniel Russell</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">14 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
            <div class="info">
              <p>James Richardson</p>
              <p>Away</p>
            </div>
            <small class="text-muted my-auto">2 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Madeline Kennedy</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">5 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Sarah Graves</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">47 min</small>
          </li>
        </ul>
      </div>
      <!-- chat tab ends -->
    </div>
  </div>
@endsection

@section('contenu')
<div class="main-panel ">
    <div class="content-wrapper ">
      <div class="card ">
        <div class="card-body">
          <h4 class="card-title">Affichage Etudiant</h4>
          <h5 class="text-right ">Nb Etudiant total: {{$nbEtudiant}}</h5>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="liste">
                  <ul>
                    <li><a href="{{route('etudiant')}}">Tous</a></li>
                    @foreach ($categories as $categor)
                      <li><a href="{{url('choix_formation2/'.$categor->nom)}}">{{$categor->nom}}</a></li>              
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @if (Session::has('tafiditra'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
            @endif       
          <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive w-100">
                <table   width="150%" border="1">
                  <thead>
                    <tr class="bg-info">
                        <th class="text-center text-dark"> #</th>
                        <th class="text-center text-dark">Photo</th>
                        <th class="text-center text-dark">Nom </th>
                        <th class="text-center text-dark">Prenom </th>
                        <th class="text-center text-dark">Vague </th> 
                        <th class="text-center text-dark">Formation </th>  
                        <th class="text-center text-dark">Entrer </th> 
                        <th class="text-center text-dark">Statue </th> 
                        <th class="text-center text-dark">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($etudiant as $mpianatra)
                   <tr>
                       <td class="alert alert-warning text-center text-white"><a href="">{{$mpianatra->id}}</a> </td>
                       <td class="text-center link"><a href="{{url('detailEtudiants/'.$mpianatra->id)}}"><img src="{{asset('storage/admin/my_images/'.$mpianatra->sary)}}" alt="" width="60px" height="60px"></a> </td>
                       <td class="text-center"><a href="{{url('detailEtudiants/'.$mpianatra->id)}}">{{$mpianatra->nom}}</a></td>
                       <td class="text-center"><a href="{{url('detailEtudiants/'.$mpianatra->id)}}">{{$mpianatra->prenom}}</a></td>
                       <td class="text-center">{{$mpianatra->nom_du_vague}}</td>
                       <td class="text-center">{{$mpianatra->formation}}</td>
                       <td class="text-center">{{$mpianatra->entrer}}</td>
                       
                        @if ($mpianatra->statue == 1)
                        <td class="text-center"><label class="badge badge-success">Etudiant actif</label></td>
                        @elseif ($mpianatra->statue == 2)  
                        <td class="text-center"><label class="badge badge-warning">Perfectionnement</label></td>
                        @elseif ($mpianatra->statue == 3)  
                        <td class="text-center"><label class="badge badge-dark">Ancien</label></td>
                        @elseif ($mpianatra->statue == 4)  
                        <td class="text-center"><label class="badge badge-info">Standby</label></td>
                        @elseif ($mpianatra->statue == 5)  
                        <td class="text-center"><label class="badge badge-primary
                          ">Famille</label></td>
                        @endif
                     
                       <td class="text-center">
                         <a href="{{url('etudiantModification/'.$mpianatra->id)}}" class="btn btn-outline-primary">Modifier</a>
                         <a href="{{url('etudiantSuppr/'.$mpianatra->id)}}" class="btn btn-outline-danger" id="btn" onclick="suppr()" >Supprimer</a>
                       </td>
                   </tr>                                     
                   @endforeach
                  </tbody>
                </table>
                <div class="paginate mt-4 d-flex  justify-content-center  mb-4">
                  <p>{{$etudiant->links()}}</p>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h4 class="text-right mt-3"></h4>
    </div>
</div>
@endsection