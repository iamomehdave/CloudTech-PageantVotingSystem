<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $value->name }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')?? $value->email }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

    <div class="col-md-6">
        <input id="phone" type="text" class="form-control @error('name') is-invalid @enderror" name="phone" value="{{ old('phone')?? $value->phone }}" required autocomplete="phone" autofocus>

        @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="contestant" class="col-md-4 col-form-label text-md-right">{{ __('Contestant S/N') }}</label>

    <div class="col-md-6">
        <input id="sn" type="text" class="form-control @error('contestant') is-invalid @enderror" name="sn" value="{{ old('sn')?? $value->sn }}" required autocomplete="sn">

        @error('sn')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Contestant Image') }}</label>
    <div class="col-md-6">
        <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image')?? $value->image }}" required>
        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
@csrf