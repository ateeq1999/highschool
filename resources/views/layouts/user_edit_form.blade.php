<div class="content-body"><section id="grid-options" class="row">
    <div class="col-md-2"></div>	
    <div class="col-md-8 col-offset-3">
        <div class="card">
            <div class="card-body collapse in collapse in">
                <div class="card-block">
                    <div class="col-md-12">
                        <div class="card" style="">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <form action="/user/{{ $user->id }}" class="form" method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">اسم المستخدم  </label>
                                                        <input value="{{ $user->name }}" type="text" id="name" class="form-control" placeholder="اسم المادة  " name="name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">البريد الالكتروني</label>
                                                        <input value="{{ $user->email }}" type="text" id="name" class="form-control" placeholder="اسم المادة  " name="email">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-actions">
                                            <button class="btn btn-primary mr-3" type="submit">{{ 'اضافه' }}</button>
                                            <a class="btn btn-danger ml-2" href="/user">{{ 'الغاء' }}</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>