<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotificationView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*DB::statement('create view notification_view as select ud.firstname, ud.lastname, ud.user_profile_verified, c.collateral_verified, c.email, c.collateral_id, ud.user_id
                from user_details ud right join collateral c
                on ud.email = c.email
                where ud.user_profile_verified != \'Y\'
                or c.collateral_verified !=\'Y\'');*/
        DB::statement('create view notification_view as  
        select 
		a.firstname,
		a.lastname,
		a.user_profile_verified ,
		b.collateral_verified, 
		b.email, 
		case when b.collateral_verified=\'Y\' and a.user_profile_verified =\'N\' then null
			when b.collateral_verified=\'N\' and a.user_profile_verified =\'Y\' then  b.collateral_id  
			when b.collateral_verified=\'N\' and a.user_profile_verified =\'N\' then  b.collateral_id 
			when b.collateral_verified=\'Y\' and a.user_profile_verified =\'Y\' then  null
            when b.collateral_verified=\'N\' then b.collateral_id
            end as collateral_id,
		case when b.collateral_verified=\'Y\' and a.user_profile_verified =\'N\' then a.user_id 
			when b.collateral_verified=\'N\' and a.user_profile_verified =\'Y\' then  null
			when b.collateral_verified=\'Y\' and a.user_profile_verified =\'Y\' then  null
            when b.collateral_verified=\'N\' and a.user_profile_verified =\'N\' then  a.user_id
            end as user_id,
       case when 
            (case when b.collateral_verified=\'Y\' and a.user_profile_verified =\'N\' then null
			when b.collateral_verified=\'N\' and a.user_profile_verified =\'Y\' then  b.collateral_id  
			when b.collateral_verified=\'N\' and a.user_profile_verified =\'N\' then  b.collateral_id 
			when b.collateral_verified=\'Y\' and a.user_profile_verified =\'Y\' then  null
            when b.collateral_verified=\'N\' then b.collateral_id
            end) is not null
            then \'Collateral\'
            when 
            (case when b.collateral_verified=\'Y\' and a.user_profile_verified =\'N\' then a.user_id 
			when b.collateral_verified=\'N\' and a.user_profile_verified =\'Y\' then  null
			when b.collateral_verified=\'Y\' and a.user_profile_verified =\'Y\' then  null
            when b.collateral_verified=\'N\' and a.user_profile_verified =\'N\' then  a.user_id
            end
            ) is not null 
            then \'Profile\'
		end		
        as notification_type
        from user_details a
        right join collateral b on a.email = b.email');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW notification_view');
    }
}
