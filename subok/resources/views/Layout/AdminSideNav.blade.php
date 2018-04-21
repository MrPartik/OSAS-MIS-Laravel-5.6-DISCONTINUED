<div class="leftside-navigation">
    <ul class="sidebar-menu" id="nav-accordion">
        <li>
            <a href="Dashboard"><i class ="fa fa-dashboard" ></i><span> {{ $Title }}</span></a>
        </li>
        <li class="sub-menu">
            <a href="javascript:;"><i class="fa fa-user"></i><span>Student Setup</span></a>
            <ul class="sub">
                <li><a href="FinancialAssistanceTitle">Assistance Title</a></li>
                <li><a href="BatchYear">Batch Year</a></li>
                <li><a href="Semester">Semester</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            @if($Title == 'Accreditation Requirement' or $Title == 'Course' or $Title == 'Non Academic Category' or $Title == 'Academic Category' )
                <a class="active" href="javascript:;"><i class="fa fa-users"></i><span>Organization Setup</span></a>
            @else
                <a href="javascript:;"><i class="fa fa-users"></i><span>Organization Setup</span></a>
            @endif            
            <ul class="sub">
                @if($Title == 'Accreditation Requirement')
                    <li class="active"><a href="AccreditationRequirement">Accreditation Requirement</a></li>
                @else
                    <li><a href="AccreditationRequirement">Accreditation Requirement</a></li>
                @endif
                
                @if($Title == 'Course')
                    <li class="active"><a href="Course">Course</a></li>
                @else
                    <li><a href="Course">Course</a></li>
                @endif

                @if($Title == 'Non Academic Cateogry')
                    <li class="active"><a href="NonAcademicOrganization">Non Academic Category </a></li>
                @else
                    <li><a href="NonAcademicOrganization">Non Academic Category </a></li>
                @endif
                
                @if($Title == 'Academic Cateogry')
                    <li class="active"><a href="OrganizationCategory">Organization Category</a></li>
                @else
                    <li><a href="OrganizationCategory">Organization Category</a></li>
                @endif
                
            </ul>
        </li>
        <li class="sub-menu">
            @if($Title == 'Clearance Signatory' or $Title == 'Designated Office' or $Title == 'Sanction Detail' )
                <a class='active' href="javascript:;"><i class="fa fa-user"></i><span>Sanction Setup</span></a>
            @else
                <a href="javascript:;"><i class="fa fa-user"></i><span>Sanction Setup</span></a>
            @endif            
            <ul class="sub">
                @if($Title == 'Clearance Signatory')
                    <li class="active"><a href="ClearanceSignatory">Clearance Signatory</a></li>
                @else
                    <li><a href="ClearanceSignatory">Clearance Signatory</a></li>
                @endif
                
                @if($Title == 'Designated Office')
                    <li class="active"><a href="DesignatedOffice">Designated Office</a></li>
                @else
                    <li><a href="DesignatedOffice">Designated Office</a></li>
                @endif

                @if($Title == 'Sanction Detail')
                    <li class="active"><a href="SanctionDetail">Sanction Detail</a></li>
                @else
                    <li><a href="SanctionDetail">Sanction Detail</a></li>
                @endif
                
            </ul>            
            
        </li>
        <li class="sub-menu">
            <a href="javascript:;"><i class="fa fa-user"></i><span>Admin Setup</span></a>
            <ul class="sub">
                <li><a href="ActiveAcademicYear">Active Academic Year and Semester</a></li>
                <li><a href="UserAccount">Sanction Detail</a></li>
            </ul>
        </li>
    </ul>
</div>
