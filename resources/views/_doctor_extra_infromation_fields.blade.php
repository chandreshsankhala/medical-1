<!-- Contact Form Input -->


<div  class="col-md-12">
    <div class="form-group">
        <label class="control-label col-sm-2" for="Availability">Availability</label>
        <div class="col-sm-10 mt-50">
            <label class="control-label " for="Availability">Monday to Saturday</label>
            <table>
                <tr>
                    <td>Morning</td>
                    <td>

                            <div class="input-group input-daterange">
                                    <input id="m_s_datetimepicker_m_1" type="text" class="form-control required m_s_datetimepicker_m" placeholder="Start" name="m_to_s_morning_start" value="{{ old('m_to_s_morning_start',isset($record->m_to_s_morning_start)?$record->m_to_s_morning_start:'') }}">
                                    <div class="input-group-addon">to</div>
                                    <input id="m_s_datetimepicker_m_2" type="text" class="form-control required m_s_datetimepicker_m" placeholder="End" name="m_to_s_morning_end" value="{{ old('m_to_s_morning_end',isset($record->m_to_s_morning_end)?$record->m_to_s_morning_end:'') }}">
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Evening</td>
                    <td>

                            <div class="input-group input-daterange">
                                    <input id="m_s_datetimepicker_e_1" type="text" class="form-control required m_s_datetimepicker_e" placeholder="Start" name="m_to_s_evening_start" value="{{ old('m_to_s_evening_start',isset($record->m_to_s_evening_start)?$record->m_to_s_evening_start:'') }}">
                                    <div class="input-group-addon">to</div>
                                    <input id="m_s_datetimepicker_e_2" type="text" class="form-control required m_s_datetimepicker_e" placeholder="End" name="m_to_s_evening_end" value="{{ old('m_to_s_evening_end',isset($record->m_to_s_evening_end)?$record->m_to_s_evening_end:'') }}">
                            </div>
                    </td>
                </tr>
            </table>  
        </div>
        <div class="col-sm-10 mt-50">
                <label class="control-label " for="Availability">Sunday</label>
                <table>
                    <tr>
                        <td>Morning</td>
                        <td>
    
                                <div class="input-group input-daterange">
                                        <input id="s_datetimepicker_m_1" type="text" class="form-control required s_datetimepicker_m" placeholder="Start"  name="s_evening_start" value="{{ old('s_evening_start',isset($record->s_evening_start)?$record->s_evening_start:'') }}">
                                        <div class="input-group-addon">to</div>
                                        <input id="s_datetimepicker_m_2" type="text" class="form-control required s_datetimepicker_m" placeholder="End"  name="s_evening_end" value="{{ old('s_evening_end',isset($record->s_evening_end)?$record->s_evening_end:'') }}">
                                </div>
                        </td>
                    </tr>
                </table>  
            </div>
    </div>   
    <div class="form-group mt-50">
             <a class="btn btn-primary" href="{{ url('/choose-calendar-option') }}">Choose Calendar Option</a>
    </div>
    <div class="form-group mt-50">
            <div class="col-sm-10 ">
                    <div class="form-check">
                            <input class="form-check-input" {{ old('home_visit',isset($record->home_visit) && !empty($record->home_visit)?'checked="checked"':'') }}  name="home_visit" type="checkbox" value="1" id="home_visit">
                            <label class="form-check-label" for="home_visit">Home visit</label>
                            
                    </div>
            </div>
            <div id="home_visit_div" {{ old('home_visit',isset($record->home_visit) && !empty($record->home_visit)?'':"style=display:none") }} >
            <div  class="col-sm-10 mt-10">
                    <label class="control-label " for="Availability">Monday to Saturday</label>
                    <table>
                        <tr>
                            <td>Morning</td>
                            <td>
        
                                    <div class="input-group input-daterange">
                                            <input id="h_s_m_datetimepicker_m_1" type="text" class="form-control  h_s_m_datetimepicker_m" placeholder="Start"  name="h_m_s_morning_start" value="{{ old('h_m_s_morning_start',isset($record->h_m_s_morning_start)?$record->h_m_s_morning_start:'') }}">
                                            <div class="input-group-addon">to</div>
                                            <input id="h_s_m_datetimepicker_m_2" type="text" class="form-control  h_s_m_datetimepicker_m" placeholder="End" name="h_m_s_morning_end" value="{{ old('h_m_s_morning_end',isset($record->h_m_s_morning_end)?$record->h_m_s_morning_end:'') }}">
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Evening</td>
                            <td>
        
                                    <div class="input-group input-daterange">
                                            <input id="h_s_m_datetimepicker_e_1" type="text" class="form-control  h_s_m_datetimepicker_e" placeholder="Start"  name="h_m_s_evening_start" value="{{ old('h_m_s_evening_start',isset($record->h_m_s_evening_start)?$record->h_m_s_evening_start:'') }}">
                                            <div class="input-group-addon">to</div>
                                            <input id="h_s_m_datetimepicker_e_2" type="text" class="form-control  h_s_m_datetimepicker_e" placeholder="End"  name="h_m_s_evening_end" value="{{ old('h_m_s_evening_end',isset($record->h_m_s_evening_end)?$record->h_m_s_evening_end:'') }}">
                                    </div>
                            </td>
                        </tr>
                    </table>  
                </div>
                <div class="col-sm-10 mt-50">
                    <label class="control-label " for="Availability">Sunday</label>
                    <table>
                        <tr>
                            <td>Morning</td>
                            <td>
        
                                    <div class="input-group input-daterange">
                                            <input id="h_s_datetimepicker_m_1" type="text" class="form-control  h_s_datetimepicker_m" placeholder="Start" name="h_s_morning_start" value="{{ old('h_s_morning_start',isset($record->h_s_morning_start)?$record->h_s_morning_start:'') }}">
                                            <div class="input-group-addon">to</div>
                                            <input id="h_s_datetimepicker_m_2" type="text" class="form-control  h_s_datetimepicker_m" placeholder="End" name="h_s_morning_end" value="{{ old('h_s_morning_end',isset($record->h_s_morning_end)?$record->h_s_morning_end:'') }}">
                                    </div>
                            </td>
                        </tr>
                    </table>  
                </div>
    </div>
    </div>

    <div class="form-group mt-50">
            <label class="control-label col-sm-2" for="ActualFee">Actual Fee</label>
            <div class="col-sm-10 ">
                    <input  type="text" class="form-control required" name="actual_fee" value="{{ old('actual_fee',isset($record->actual_fee)?$record->actual_fee:'') }}" >
            </div>
    </div>
   
    <div class="form-group mt-10">
            <label class="control-label col-sm-2" for="DiscountedFee">Discounted Fee</label>
            <div class="col-sm-10 ">
                    <input  type="text" class="form-control required" name="discounted_fee" value="{{ old('discounted_fee',isset($record->discounted_fee)?$record->discounted_fee:'') }}">
            </div>
    </div>
    <div class="form-group mt-10">
            <label class="control-label col-sm-2" for="title">Title</label>
            <div class="col-sm-10 ">
                    <input  type="text" class="form-control required" name="meta_title" value="{{ old('meta_title',isset($record->meta_title)?$record->meta_title:'') }}">
            </div>
    </div>
    <div class="form-group mt-10">
            <label class="control-label col-sm-2" for="Description">Description</label>
            <div class="col-sm-10 ">
                    <input  type="text" class="form-control required" name="meta_description" value="{{ old('meta_description',isset($record->meta_description)?$record->meta_description:'') }}">
            </div>
    </div>
    <div class="form-group mt-10">
            <label class="control-label col-sm-2" for="Keyword">Keyword</label>
            <div class="col-sm-10 ">
                    <input  type="text" class="form-control required"  name="meta_keyword" value="{{ old('meta_keyword',isset($record->meta_keyword)?$record->meta_keyword:'') }}">
            </div>
    </div>
</div>
    
