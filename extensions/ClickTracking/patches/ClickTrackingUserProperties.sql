--
-- Schema for ClickTrackingUserProperties
--

CREATE TABLE IF NOT EXISTS /*_*/click_tracking_user_properties (

	-- session id from clicktracking table
	session_id varbinary(255) NOT NULL,

	-- property name
	property_name varbinary(255),

	-- property value
	property_value varbinary(255),

	-- property version
	property_version INTEGER
	
) /*$wgDBTableOptions*/;

CREATE INDEX /*i*/click_tracking_user_properties_session_idx ON /*_*/click_tracking_user_properties (session_id);

CREATE UNIQUE INDEX ct_user_prop_id_name_value_version ON /*_*/click_tracking_user_properties(session_id, property_name, property_value, property_version);