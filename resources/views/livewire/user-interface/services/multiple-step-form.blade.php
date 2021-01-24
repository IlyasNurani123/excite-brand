<div wire:ignore.self class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="createProjectLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createProjectLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <form wire:submit.prevent="submit">
                    @csrf
                    <!-- One "tab" for each step in the form: -->
                    @if ($step == 0)
                        <div class="tab">
                            <h6>WHAT SERVICE/SERVICES ARE YOU INTERESTED IN?</h6>
                            <h6 class="different-forms">Step 1<b class="text-danger">*</b> </h6><br>
                            <p><input type="checkbox" name="SEO" wire:model="seo"> SEO</p>
                            @error('seo') <small class="text-danger">{{ $message }}</small>@enderror

                            <p><input type="checkbox" name="google-ads" wire:model="google_add">
                                Google Ads
                                @error('google_add') <small class="text-danger">{{ $message }}</small>@enderror
                            </p>
                            <p><input type="checkbox" name="web-design" wire:model="web_design">
                                Web Design
                                @error('web_design') <small class="text-danger">{{ $message }}</small>@enderror
                            </p>
                            <p><input type="checkbox" name="above-all" wire:click="checkAll">
                                All of the Above
                                @error('all') <small class="text-danger">{{ $message }}</small>@enderror
                            </p>
                            <div class="mt-4"><button type="button" class="btn btn-primary m-2"
                                    wire:click="increaseStep">Next</button>
                            </div>
                        </div>
                    @endif
                    @if ($step == 1)
                        <div class="tab different-packeges">
                            <h6>WHAT IS YOUR ESTIMATED MONTHLY MARKETING BUDGET?</h6>
                            <h6 class="different-forms">Step 2<b class="text-danger">*</b> </h6><br>
                            <p><input class="radio-button-size" type="radio" wire:model="price" value="$0-$500"> $0 -
                                $500</p>
                            <p><input class="radio-button-size" type="radio" wire:model="price" value="$500-2k"> $500
                                - $2k</p>
                            <p><input class="radio-button-size" type="radio" wire:model="price" value="$2k-$5k">
                                $2k - $5k</p>
                            <p><input class="radio-button-size" type="radio" wire:model="price" value="$k+"> $k+
                            </p>
                            @error('price') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-primary m-2" id="prevBtn"
                                wire:click="decreaseStep">Previous</button>
                            <button type="button" class="btn btn-primary m-2" wire:click="increaseStep1">Next</button>
                        </div>

                    @endif
                    @if ($step == 2)
                        <div class="tab estimated-budget-input-fields">
                            <h6>WHAT IS YOUR ESTIMATED MONTHLY MARKETING BUDGET?</h6>
                            <h6 class="different-forms">Step 3<b class="text-danger">*</b> </h6><br>

                            <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                    wire:model.debounce.500ms="name" placeholder="Your Name*" required>
                                @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="formGroupExampleInput2"
                                    wire:model.debounce.500ms="email" placeholder="Your Email*" required>
                                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput2"
                                    wire:model.debounce.500ms="contact_no" placeholder="Your Contact No *" required>
                                @error('contact_no') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput2"
                                    wire:model.debounce.500ms="website_url"
                                    placeholder="please enter your website url *" required>
                                @error('website_url') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        </div>
                        <div style="" class="mt-4">
                            <button type="button" class="btn btn-primary m-2" id="prevBtn"
                                wire:click="decreaseStep">Previous</button>
                            <button class="btn btn-primary m-2 " type="submit">Send Quote</button>

                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
