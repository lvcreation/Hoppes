@extends('layouts.master')
@section('titre-admin')
Detail etudiants
@endsection
@section('contenu')
<section id="contenu">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div class="photoE">
            <img src="{{asset('storage/admin/my_images/'.$detailEtudiant->sary)}}" alt="sary etudiants">
        </div>
        <table class="tableEtudiant" border="2">
            <thead>
                <th>Adresse:</th>
                <th>Téléphone:</th>
                
                
            </thead>
            <tbody>
                <td class="text-center">{{$detailEtudiant->adresse}}</td>
                <td class="text-center"> {{$detailEtudiant->phone}}</td>
                
                
            </tbody>
        </table>
        <table class="tableEtudiant" border="2">
            <thead>
                <th>Telephone d'urgence:</th>
            </thead>
            <tbody>
                <td class="text-center">{{$detailEtudiant->Ephone}}</td>
            </tbody>
        </table>
        <table class="tableEtudiant" border="2">
            <thead>
                <th>Droit:</th>
                <th>Vague:</th>
            </thead>
            <tbody>
                <td class="text-center">{{$detailEtudiant->droit}} Ar</td>
                <td class="text-center">{{$detailEtudiant->nom_du_vague}}</td>

                
            </tbody>
        </table>
      </div>
      <div class="col-lg-8">
        <div class="aboutStudent">
            <h1 class="text-center">{{$detailEtudiant->nom}}</h1>
            <h3 class="text-center">{{$detailEtudiant->prenom}}</h3>
            <table class="tableEtudiant" border="2">
                <thead>
                    <th>Formation:</th>
                    <th>Durée du formation:</th>
                    <th>Status:</th>
                </thead>
                <tbody>
                    <td class="text-center">{{$detailEtudiant->formation}}</td>
                    <td class="text-center">{{$detailEtudiant->duree}} mois</td>
                    @if ($detailEtudiant->statue == 1)
                    <td class="text-center"><label class="badge badge-success">Etudiant actif</label></td>
                    @elseif ($detailEtudiant->statue == 2)  
                    <td class="text-center"><label class="badge badge-warning">Perfectionnement</label></td>
                    @elseif ($detailEtudiant->statue == 3)  
                    <td class="text-center text-white"><label class="badge badge-dark">Ancien</label></td>
                    @elseif ($detailEtudiant->statue == 4)  
                    <td class="text-center"><label class="badge badge-danger">stand by</label></td>
                    @elseif ($detailEtudiant->statue == 5)  
                    <td class="text-center"><label class="badge badge-primary">Famille</label></td>
                    @endif
                </tbody>
            </table>
            <table class="tableEtudiant" border="2">
                <thead> 
                    <th>Ecolage mois 1:</th>
                    <th>Ecolage mois 2:</th>
                    <th>Ecolage mois 3:</th>
                    <th>Ecolage mois 4:</th>
                    <th>Ecolage mois 5:</th>
                </thead>
                <tbody> 
                    
                    @if ($detailEtudiant->mois1 == 0 && $detailEtudiant->duree == 2)
                    <td class="text-center"><label class="badge badge-warning">NULL</label></td>
                    @elseif ($detailEtudiant->mois1 == 0 && $detailEtudiant->duree != 2)
                    <td class="text-center"><label class="badge badge-warning">Non payé</label></td>
                    @else
                    <td class="text-center"><label class="badge badge-success">{{$detailEtudiant->mois1}} Ar</label></td>
                    @endif 
                    @if ($detailEtudiant->mois2 == 0 && $detailEtudiant->duree == 2)
                    <td class="text-center"><label class="badge badge-warning">NULL</label></td>
                    @elseif ($detailEtudiant->mois2 == 0 && $detailEtudiant->duree != 2)
                    <td class="text-center"><label class="badge badge-warning">Non payé</label></td>
                    @else
                    <td class="text-center"><label class="badge badge-success">{{$detailEtudiant->mois2}} Ar</label></td>
                    @endif 
                    @if ($detailEtudiant->mois3 == 0 && $detailEtudiant->duree == 2)
                    <td class="text-center"><label class="badge badge-warning">NULL</label></td>
                    @elseif ($detailEtudiant->mois3 == 0 && $detailEtudiant->duree != 2)
                    <td class="text-center"><label class="badge badge-warning">Non payé</label></td> 
                    @else
                    <td class="text-center"><label class="badge badge-success">{{$detailEtudiant->mois3}} Ar</label></td>
                    @endif   
                    @if ($detailEtudiant->mois4 == 0 && $detailEtudiant->duree == 2)
                    <td class="text-center"><label class="badge badge-warning">NULL</label></td>
                    @elseif ($detailEtudiant->mois4 == 0 && $detailEtudiant->duree != 2)
                    <td class="text-center"><label class="badge badge-warning">Non payé</label></td> 
                    @else
                    <td class="text-center"><label class="badge badge-success">{{$detailEtudiant->mois4}} Ar</label></td> 
                    @endif  
                    @if ($detailEtudiant->mois5 == 0 && $detailEtudiant->duree == 2)
                    <td class="text-center"><label class="badge badge-warning">NULL</label></td>
                    @elseif ($detailEtudiant->mois5 == 0 && $detailEtudiant->duree != 2)
                    <td class="text-center"><label class="badge badge-warning">Non payé</label></td> 
                    @else
                    <td class="text-center"><label class="badge badge-success">{{$detailEtudiant->mois5}} Ar</label></td> 
                    @endif         
                </tbody>
                <tr>

                    @if (isset($ecolageDetail->etudiant_id) )
                    <td colspan="2" class="text-center pt-2 pb-2"><a href="{{url('EcolageDetail/'.$detailEtudiant->id)}}" class="btn btn-outline-success">Voir plus sur l'ecolage</a></td>
                    <td colspan="3" class="text-center pt-2 pb-2"><a href="{{url('paiement_ecolage/'.$detailEtudiant->id)}}" class='btn btn-outline-warning' >Payement Ecolage</a></td>
                        
                    @else
                    <td colspan="5" class="text-center pt-2 pb-2"><a href="{{url('paiement_ecolage/'.$detailEtudiant->id)}}" class='btn btn-outline-warning' >Payement Ecolage</a></td>
                      
                    @endif
                </tr>
            </table>
            <table class="tableEtudiant" border="2">
                <thead>    
                    <th>Entrée :</th>
                    <th>Sortie:</th>
                </thead>
                <tbody>
                    <td class="text-center">{{$detailEtudiant->entrer}}</td>
                    <td class="text-center">{{$detailEtudiant->sortie}}</td>                   
                </tbody>
            </table>
            <table class="tableEtudiant" border="2">
                <thead>    
                    <th>Modification statue :</th>
                </thead>
                <tbody>
                    <td class="text-center">
                        <a class="btn btn-outline-warning" href="{{url('EtudiantAttente/'.$detailEtudiant->id)}}">Statue Perfectionnement</a>
                        <a class="btn btn-outline-dark text-white" href="{{url('EtudiantAncien/'.$detailEtudiant->id)}}">Statue Ancien</a>
                        <a class="btn btn-outline-danger" href="{{url('EtudiantStandby/'.$detailEtudiant->id)}}">Statue Standby</a>
                        <a class="btn btn-outline-primary" href="{{url('EtudiantFamille/'.$detailEtudiant->id)}}">Statue famille</a>
                        
                    </td>                  
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection