@extends('layouts.master')
@section('titre-admin')
Detail Ecolage
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
<div id="contenu">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-center mt-4 mb-4 text-white">Detail Ecolage de</h2>
                <h3 class="text-center mt-4 mb-4 " >{{$detailEcolage->nom}}</h3>
                <h4 class="text-center mt-4 mb-4">{{$detailEcolage->prenom}}</h4>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('storage/admin/my_images/'.$detailEcolage->sary)}}" alt="" width="300px" height="200px">
            </div>
        </div>
    </div>
   
    <table border="2" width='100%' class="mt-5">
        <tr>
            <th class="text-center pt-2 pb-2 bg-info text-dark">Ecolage Mois 1</th>
            <th class="text-center pt-2 pb-2 bg-info text-dark">Ecolage Mois 2</th>
            <th class="text-center pt-2 pb-2 bg-info text-dark">Ecolage Mois 3</th>
        </tr>
        <tr>
            @if ($detailEcolage->mois1 == 0)
            <td class="text-center pt-2 pb-2">NULL</td>
            @else
            <td class="text-center pt-2 pb-2">{{$detailEcolage->mois1}} Ariary</td>
            @endif
            @if ($detailEcolage->mois2 == 0)
            <td class="text-center pt-2 pb-2">NULL</td>
            @else
            <td class="text-center pt-2 pb-2">{{$detailEcolage->mois2}} Ariary</td>
            @endif
            @if ($detailEcolage->mois3 == 0)
            <td class="text-center pt-2 pb-2">NULL</td>
            @else
            <td class="text-center pt-2 pb-2">{{$detailEcolage->mois3}} Ariary</td>
            @endif
        </tr>
       <tr>
            @if ($detailEcolage->mois1 == 0)
            <td class="text-center pt-2 pb-2">NULL</td>
            @else
            <td class="text-center pt-2 pb-2">{{$detailEcolage->Pmois1}} </td>
            @endif
            @if ($detailEcolage->mois2 == 0)
            <td class="text-center pt-2 pb-2">NULL</td>
            @else
            <td class="text-center pt-2 pb-2">{{$detailEcolage->Pmois2}}</td>
            @endif
            @if ($detailEcolage->mois3 == 0)
            <td class="text-center pt-2 pb-2">NULL</td>
            @else
            <td class="text-center pt-2 pb-2">{{$detailEcolage->Pmois3}}</td>
            @endif
            
       </tr>
    </table>
    <table border="2" width='100%' class="mt-5">
        <tr>
            <th class="text-center pt-2 pb-2 bg-info text-dark">Ecolage Mois 4</th>
            <th class="text-center pt-2 pb-2 bg-info text-dark">Ecolage Mois 5</th>
        </tr>
       <tr>
            @if ($detailEcolage->mois4 == 0)
                <td class="text-center pt-2 pb-2">NULL</td>
            @else
            <td class="text-center pt-2 pb-2">{{$detailEcolage->mois4}} Ariary</td>
            @endif
            @if ($detailEcolage->mois5 == 0)
                <td class="text-center pt-2 pb-2">NULL</td>
            @else
            <td class="text-center pt-2 pb-2">{{$detailEcolage->mois5}} Ariary</td>
            @endif 
       </tr>
       <tr>
            @if ($detailEcolage->mois4 == 0)
            <td class="text-center pt-2 pb-2">NULL</td>
            @else
            <td class="text-center pt-2 pb-2">{{$detailEcolage->Pmois4}} </td>
            @endif
            @if ($detailEcolage->mois5 == 0)
            <td class="text-center pt-2 pb-2">NULL</td>
            @else
            <td class="text-center pt-2 pb-2">{{$detailEcolage->Pmois5}}</td>
            @endif
       </tr>
    </table>
   

</div>
@endsection