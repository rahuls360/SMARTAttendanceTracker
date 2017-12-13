package com.rahuls360.smartattendancetracker;

        import android.support.v7.app.AppCompatActivity;
        import android.os.Bundle;
        import android.widget.TextView;

public class DisplayAttendance extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_display_attendance);
        TextView textView = (TextView) findViewById(R.id.resultText);
        textView.setText(getIntent().getExtras().getString("result"));
    }
}