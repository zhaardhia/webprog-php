<div data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer">
    @forelse ($city->users as $user)
        {{-- <img src="{{ URL::$user->image }}" class="rounded-circle mw-100" style="height: 2rem; width: 2rem;"
        alt=""> --}}
        <p>yo</p>
    @empty
        <small>No users here currently...<br/></small>
    @endforelse
    <small>Relocate Users</small>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Relocate User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column" style="gap: 1rem">
                @forelse ($city->users as $user)
                    <div class="d-flex align-items-center" style="gap: 1.5rem">
                        <img src="{{ URL::asset('Detail/IMG_5876.jpg') }}" class="rounded mw-100"
                            style="height: 4rem; width: 4rem;" alt="">
                        <p class="mb-0" style="font-size: 1.5rem">{{$user->name}}</p>
                    </div>
                    @if ($loop->index == 4)
                        @break
                    @endif
                @empty
                    <div class="d-flex align-items-center" style="gap: 1.5rem">
                        <p class="mb-0" style="font-size: 1.5rem">No users here currently...</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
