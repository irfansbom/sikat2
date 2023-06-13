<input type="hidden" name="id" id="id" value="{{ old('id', $model->id) }}">
<div class="row mb-2">
    <div class="col">
        <div class="form-group ">
            <label for="judul" class="col-sm-12 control-label">Judul</label>
            <div class="col-sm-12">
                <textarea type="text" class="form-control" id="title" name="title" value="{{ old('title', $model->title) }}"
                    required></textarea>
            </div>
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        <div class="form-group">
            <label for="no_rak" class="col-sm-12 control-label">Nomor Rak</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="no_rak" name="no_rak"
                    value="{{ old('no_rak', $model->no_rak) }}" required>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="wilayah" class="col-sm-12 control-label">Wilayah</label>
            <div class="col-sm-12">
                <select class="form-control" name="wilayah" id="wilayah" required>
                    <option value="1600" @if ($model->domain == '1600') selected @endif>
                        1600 - Prov. Sumatera Selatan
                    </option>
                    @foreach ($domain as $dom)
                        <option value="{{ $dom->id_kab }}" @if ($model->domain == $dom->id_kab) selected @endif>
                            {{ $dom->id_kab }} - {{ $dom->nama_kab }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="source" class="col-sm-12 control-label">Sumber</label>
            <div class="col-sm-12">
                <select class="form-control" name="source" id="source" required>
                    <option value="1" @if ($model->source == '1') selected @endif>1. BPS Provinsi</option>
                    <option value="2" @if ($model->source == '2') selected @endif>2. BPS Pusat</option>
                    <option value="3" @if ($model->source == '3') selected @endif>3. OPD</option>
                    <option value="4" @if ($model->source == '4') selected @endif>4. Swasta</option>
                    <option value="5" @if ($model->source == '5') selected @endif>5. lainnya</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col">
        <div class="form-group mb-2">
            <label for="rl_date" class="col-sm-12 label">Tanggal Rilis</label>
            <div class="col-sm-12">
                <input type="text" class="form-control datepicker" id="release_date" name="release_date"
                    value="{{ old('release_date', $model->release_date) }}">
            </div>
        </div>
        <div class="form-group">
            <label for="status_website" class="col-sm-12 label">Tersedia di Website BPS</label>
            <div class="col-sm-12">
                <select class="form-control" name="status_website" id="status_website" required>
                    <option value="0" @if ($model->status_website = '0') selected @endif>Belum tersedia</option>
                    <option value="1" @if ($model->status_website = '1') selected @endif>Sudah tersedia</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group ">
            <label class="col-sm-12 control-label">Cover</label>
            <div class="col-sm-12">
                <input type="file" class="form-control-file" id="cover" name="cover"
                    accept="image/jpeg, image/png">
                {{-- <input type="hidden" name="covername" id="covername"> --}}
                <img id="imgcover" class="mb-1"
                    @if ($model->cover) src="{{ assets($model->cover) }}" @endif height="80px"
                    alt="Cover" style="max-width: 100px">
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group input-group mb-3">
            <label class="col-sm-12 control-label">PDF</label>
            <div class="col-sm-12">
                <input type="file" class="form-control-file" id="pdf" name="pdf" accept="application/pdf">
                {{-- <input type="hidden" name="pdfname" id="pdfname"> --}}
                <iframe id="objpdf" src="" alt="PDF" type="application/pdf" style="max-width: 100px"
                    height="80"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        <div class="form-group">
            <label for="name" class="col-sm-12 control-label">Abstrak</label>
            <div class="col-sm-12">
                <textarea type="textarea" class="form-control" id="abstrak" name="abstrak"
                    value="{{ old('abstrak', $model->abstrak) }}" rows="4"></textarea>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="qrcode" class="col-sm-12 control-label">QRCode</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="qr_code" name="qr_code"
                    value="{{ old('qrcode', $model->qrcode) }}">
            </div>
        </div>
        <div class="form-group">
            <label for="last_scan" class="col-sm-12 control-label">Terakhir discan</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="last_scan" name="last_scan"
                    value="{{ old('last_scan', $model->last_scan) }}" disabled>
            </div>
        </div>
    </div>
</div>
<div class="float-right">
    <button type="submit" class="btn btn-primary " id="tombol-simpan">Simpan
    </button>
</div>
