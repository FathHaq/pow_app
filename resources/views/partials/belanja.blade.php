@php
$barang = ['Beras', 'Minyak', 'Sunlight', 'Gas', 'Air Mineral'];
$satuan = ['liter', 'liter', 'pcs', 'tabung', 'galon'];
@endphp



@foreach ($barang as $belanjaan)
    <div class="input-group mb-3 position-relative" style="width: 240px">
        <label class="input-group-text" style="width: 120px ; " for="{{ $belanjaan }}">{{ $belanjaan }}</label>
        <select class="form-select bg-transparent" style="z-index: 3" id="{{ $belanjaan }}">
            @for ($x = 0; $x <= 35; $x++)
                {
                <option value="{{ $x }}"> {{ $x }} </option>
                }
            @endfor
        </select>
        <div class="position-absolute end-0" style="margin-right: 32px ; margin-top: 6px" for="{{ $belanjaan }}">
            <p>
                @for ($z = 0; $z < 5; $z++)
                    @if ($barang[$z] == $belanjaan)
                        {{ $satuan[$z] }}
                    @endif
                @endfor
            </p>
        </div>
    </div>
@endforeach
