package com.example.mybmi;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity2 extends AppCompatActivity {

    TextView bbmmii;
    TextView sta;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        bbmmii = findViewById(R.id.bbmmii);
        Bundle bundle = getIntent().getExtras();

        String res = bundle.getString("result");
        bbmmii = (TextView) findViewById(R.id.bbmmii);
        bbmmii.setText(res);
        String st = bundle.getString("recommand");
        sta = (TextView) findViewById(R.id.sta);
        sta.setText(st);
    }

//    @Override
//    protected void onActivityResult(int requestCode, int resultcode, Intent data) {
//        super.onActivityResult(requestCode, resultcode, data);
//        if (requestCode == 2)
//        {
//            String message = data.getStringExtra("MESSAGE");
//            bbmmii.setText(message);
//
//        }
//    }
}