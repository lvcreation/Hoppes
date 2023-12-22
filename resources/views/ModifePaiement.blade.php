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
<div id="contenu">
    <h1 class="text-center mt-4 mb-4">Paiement Ecolage de</h1>
    <h2 class="text-center mt-4 mb-4">{{$taloha->nom}}</h2>
    <h3 class="text-center mt-4 mb-4">{{$taloha->prenom}}</h3>
    <form action="{{route('EcolageAdd')}}" method="post">
        @csrf
    <table border="2" width='100%' >
        <tr>
            <th class="text-center pt-2 pb-2">Mois 1</th>
            <th class="text-center pt-2 pb-2">Mois 2</th>
            <th class="text-center pt-2 pb-2">Mois 3</th>
            <th class="text-center pt-2 pb-2">Mois 4</th>
            <th class="text-center pt-2 pb-2">Mois 5</th>
            <th class="text-center pt-2 pb-2">Id Etudiant</th>
        </tr>
        <tr>
            <td class="text-center pt-2 pb-2">
                <select name="Pmois1" id="">
                  @if ($taloha->mois1 == 0)
                        <option value="0">NULL</option>
                  @else
                    <option value="{{$taloha->mois1}}">{{$taloha->mois1}}</option>
                  @endif
                    @foreach ($ecolazy as $prix)
                        <option value="{{$prix->mois1}}">{{$prix->mois1}}</option>
                    @endforeach
                </select>
            </td>
            <td class="text-center pt-2 pb-2">
                <select name="Pmois2" id="">
                    @if ($taloha->mois2 == 0)
                        <option value="0">NULL</option>
                    @else
                    <option value="{{$taloha->mois2}}">{{$taloha->mois2}}</option>
                    @endif
                    @foreach ($ecolazy as $prix)
                        <option value="{{$prix->mois2}}">{{$prix->mois2}}</option>
                    @endforeach
                </select>
            </td>
            <td class="text-center pt-2 pb-2">
                <select name="Pmois3" id="">
                    @if ($taloha->mois3 == 0)
                        <option value="0">NULL</option>
                    @else
                    <option value="{{$taloha->mois3}}">{{$taloha->mois3}}</option>
                    @endif
                    @foreach ($ecolazy as $prix)
                        <option value="{{$prix->mois3}}">{{$prix->mois3}}</option>
                    @endforeach
                </select>
            </td>
            <td class="text-center pt-2 pb-2">
                <select name="Pmois4" id="">
                    @if ($taloha->mois4 == 0)
                        <option value="0">NULL</option>
                    @else
                    <option value="{{$taloha->mois4}}">{{$taloha->mois4}}</option>
                    @endif
                    @foreach ($ecolazy as $prix)
                        <option value="{{$prix->mois4}}">{{$prix->mois4}}</option>
                    @endforeach
                </select>
            </td>
            <td class="text-center pt-2 pb-2">
                <select name="Pmois5" id="">
                    @if ($taloha->mois5 == 0)
                        <option value="0">NULL</option>
                    @else
                    <option value="{{$taloha->mois5}}">{{$taloha->mois5}}</option>
                    @endif
                    @foreach ($ecolazy as $prix)
                        <option value="{{$prix->mois5}}">{{$prix->mois5}}</option>
                    @endforeach
                </select>
            </td>
            <td class="text-center pt-2 pb-2" @readonly(true)>{{$taloha->id}}</td>
        </tr>
        <tr>
            @if ($taloha->mois1 == 0)
            <td class="text-center pt-2 pb-2"><input type="date" value='0' name="Dmois1" id=""></td>
            @else
             <td class="text-center pt-2 pb-2"><input type="date" value='{{$sarany->Pmois1}}' {{--@readonly(true)--}} name="Dmois1" id="" class="text-center"></td> 
            @endif
            
            @if ($taloha->mois2 == 0)
            <td class="text-center pt-2 pb-2"><input type="date" value='0' name="Dmois2" id=""></td>
            @else
            <td class="text-center pt-2 pb-2"><input type="date" value='{{$sarany->Pmois2}}' {{--@readonly(true)--}} name="Dmois2" id="" class="text-center"></td>
            @endif
            
            @if ($taloha->mois3 == 0)
            <td class="text-center pt-2 pb-2"><input type="date" value='0' name="Dmois3" id=""></td>
            @else
            <td class="text-center pt-2 pb-2"><input type="date" value='{{$sarany->Pmois3}}' {{--@readonly(true)--}} name="Dmois3" id="" class="text-center"></td>
            @endif
            
            @if ($taloha->mois4 == 0)
            <td class="text-center pt-2 pb-2"><input type="date" value='0' name="Dmois4" id=""></td>
            @else
            <td class="text-center pt-2 pb-2"><input type="date" value='{{$sarany->Pmois4}}' {{--@readonly(true)--}}  name="Dmois4" id="" class="text-center"></td>
            @endif
            
            @if ($taloha->mois5 == 0)
            <td class="text-center pt-2 pb-2"><input type="date" value='0' name="Dmois5" id=""></td>
            @else
            <td class="text-center pt-2 pb-2"><input type="date" value='{{$sarany->Pmois5}}' {{--@readonly(true)--}}  name="Dmois5" id="" class="text-center"></td>
            @endif
            <td class="text-center pt-2 pb-2" {{--@readonly(true)--}} ><input type="hidden" name="id" value="{{$taloha->id}}"> {{$taloha->id}}</td>
        </tr>
    </table>
    <button type="submit" class="btn-submit"><i class="ti-user"></i> Paiement Ecolage</button>
    </form>
    
</div>
@endsection