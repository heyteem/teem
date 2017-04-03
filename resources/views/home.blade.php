@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row section section-set-status">
    <div class="col-xs-12">
      <div class="section-label">
        You
      </div>
      <div class="status-box status-box-set">
        <div class="status-box_time">
          <div class="status-box-section-content">
            -
          </div>
        </div>
        <div class="status-box-section status-box_name">
          <div class="status-box-section-content">
            <div class="status-box_name-first">Bob</div>
            <div class="status-box_name-last">Specht</div>
          </div>
        </div>
        <div class="status-box-section status-box_status">
          <select>
            <option value="">Status</option>
            <option value="">In</option>
            <option value="">Home</option>
            <option value="">Out</option>
          </select>
          <!-- <span class="status-box_status-select status-box_status-select-in">In</span>
          <span class="status-box_status-select status-box_status-select-home">Home</span>
          <span class="status-box_status-select status-box_status-select-out">Out</span> -->
        </div>
        <div class="status-box-section status-box_until">
          <select>
            <option value="">Until</option>
            <option value="">All Day</option>
            <option value="">8am</option>
            <option value="">9am</option>
            <option value="">10am</option>
            <option value="">11am</option>
            <option value="">12pm</option>
            <option value="">1pm</option>
            <option value="">2pm</option>
            <option value="">3pm</option>
            <option value="">4pm</option>
            <option value="">5pm</option>
            <option value="">6pm</option>
            <option value="">Tue</option>
            <option value="">Wed</option>
            <option value="">Thu</option>
            <option value="">Fri</option>
          </select>
        </div>
        <div class="status-box-section status-box_action">
          <div class="status-box-section-content">
            Set
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row section section-updates">
    <div class="col-xs-12">
      <div class="section-label">
        Teem
      </div>
      <div class="status-box-titles">
        <div class="status-box-titles_time">

        </div>
        <div class="status-box-titles-title">
          Name
        </div>
        <div class="status-box-titles-title">
          Status
        </div>
        <div class="status-box-titles-title">
          Until
        </div>
        <div class="status-box-titles-title status-box-titles-title-action">

        </div>
      </div>
      <div class="status-box">
        <div class="status-box_time">
          <div class="status-box-section-content">
            15m
          </div>
        </div>
        <div class="status-box-section status-box_name">
          <div class="status-box-section-content">
            <div class="status-box_name-first">Bob</div>
            <div class="status-box_name-last">Specht</div>
          </div>
        </div>
        <div class="status-box-section status-box_status status-box_status-in">
          <div class="status-box-section-content">
            In
          </div>
        </div>
        <div class="status-box-section status-box_until">
          <div class="status-box-section-content">
            All Day
          </div>
        </div>
        <div class="status-box-section status-box_action">
          <div class="status-box-section-content">
            Ask
          </div>
        </div>
      </div>
      <div class="status-box">
        <div class="status-box_time">
          <div class="status-box-section-content">
            2h
          </div>
        </div>
        <div class="status-box-section status-box_name">
          <div class="status-box-section-content">
            Chris
          </div>
        </div>
        <div class="status-box-section status-box_status status-box_status-out">
          <div class="status-box-section-content">
            Out
          </div>
        </div>
        <div class="status-box-section status-box_until">
          <div class="status-box-section-content">
            2pm
          </div>
        </div>
        <div class="status-box-section status-box_action">
          <div class="status-box-section-content">
            Ask
          </div>
        </div>
      </div>
      <div class="status-box">
        <div class="status-box_time">
          <div class="status-box-section-content">
            2h
          </div>
        </div>
        <div class="status-box-section status-box_name">
          <div class="status-box-section-content">
            Chris
          </div>
        </div>
        <div class="status-box-section status-box_status status-box_status-meeting">
          <div class="status-box-section-content">
            Meeting
          </div>
        </div>
        <div class="status-box-section status-box_until">
          <div class="status-box-section-content">
            2pm
          </div>
        </div>
        <div class="status-box-section status-box_action">
          <div class="status-box-section-content">
            Ask
          </div>
        </div>
      </div>
      <div class="status-box">
        <div class="status-box_time">
          <div class="status-box-section-content">
            2h
          </div>
        </div>
        <div class="status-box-section status-box_name">
          <div class="status-box-section-content">
            Chris
          </div>
        </div>
        <div class="status-box-section status-box_status status-box_status-home">
          <div class="status-box-section-content">
            Home
          </div>
        </div>
        <div class="status-box-section status-box_until">
          <div class="status-box-section-content">
            2pm
          </div>
        </div>
        <div class="status-box-section status-box_action">
          <div class="status-box-section-content">
            Ask
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
