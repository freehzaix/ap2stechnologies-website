@extends('layouts.admin')

@section('contenu')
    <!-- Liste des contacts -->
    <div class="row my-4">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Liste des contacts</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    
                  </div>
                </div>
              </div>
            </div>
            
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date et Heure</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nom complet</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Adresse mail</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Objet</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($contacts as $item)
                    
                        <tr>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">{{ $item->created_at }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              {{ $item->nom }}
                            </td>
                            <td class="align-middle text-center text-sm">
                              {{ $item->email }}
                            </td>
                            <td class="align-middle text-center text-sm">
                              {{ $item->objet }}
                            </td>
                            <td class="align-middle text-center text-sm">
                              {{ $item->message }}
                            </td>
                            <td>
                                <a href="#" class="text-secondary font-weight-bold text-xs">
                                  <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" class="text-secondary font-weight-bold text-xs"> 
                                  <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    
                    @endforeach
                  </tbody>
                </table>
                {{ $contacts->links() }}
              </div>
            </div>

          </div>
        </div>
        
      </div>
      <!-- Liste des contacts -->
@endsection