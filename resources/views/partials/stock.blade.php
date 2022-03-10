@php
$stock = ['Ayam', 'Tepung', 'Saos Pedes', 'Saos Sasa'];
$satuan = ['ekor', 'kg', 'kg', 'pcs'];
@endphp


@foreach ($stock as $item)
    <div class="input-group mb-3" style="width: 240px">
        <label class="input-group-text" style="width: 120px" for="{{ $item }}">{{ $item }}</label>
        <select class="form-select bg-transparent" style="z-index: 3" id="{{ $item }}">
            @for ($x = 0; $x <= 35; $x++)
                {
                <option value="{{ $x }}"> {{ $x }} </option>
                }
            @endfor
        </select>
        <div class="position-absolute end-0" style="margin-right: 32px ; margin-top: 6px" for="{{ $item }}">
            <p>
                @for ($z = 0; $z < 4; $z++)
                    @if ($stock[$z] == $item)
                        {{ $satuan[$z] }}
                    @endif
                @endfor
            </p>
        </div>
    </div>
@endforeach
