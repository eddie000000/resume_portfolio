package com.example.mybmi;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import org.w3c.dom.Text;

import java.text.NumberFormat;

public class MainActivity extends AppCompatActivity {
    EditText h; //height
    EditText w; //weight
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        h = (EditText)findViewById(R.id.et1); // find the value
        w = (EditText)findViewById(R.id.et2); //find the vlue
        //Button sub = findViewById(R.id.button);
        Button submit = (Button)findViewById(R.id.button); //find the button
        submit.setOnClickListener(new Button.OnClickListener(){
            public void onClick(View view)
            {
                if (!("".equals(h.getText().toString()) || "".equals(w.getText().toString())))
                {
                    float fh = Float.parseFloat(h.getEditableText().toString());
                    float fw = Float.parseFloat(w.getEditableText().toString());
                    float fresult;
                    TextView result = (TextView) findViewById(R.id.tv3);
                    fh = fh / 100;
                    fh = fh * fh;

                    NumberFormat nf = NumberFormat.getInstance();
                    nf.setMaximumFractionDigits(2);
                    fresult = fw / fh;
                    result.setText(nf.format(fw / fh) + "");
                    TextView dia = (TextView) findViewById(R.id.tv4);

                    if(fresult<10.5)
                        dia.setText("Underweight");
                    else if(10.5 <= fresult && fresult < 24)
                        dia.setText("Normal");
                    else if(24 <= fresult && fresult < 27)
                        dia.setText("Overweight");
                    else if(27 <= fresult && fresult < 30)
                        dia.setText("Hild Obesity");
                    else if(30 <= fresult && fresult < 35)
                        dia.setText("Moderate obesity");
                    else if(fresult >= 35)
                        dia.setText("Severe obesity");

                    Intent intent = new Intent(MainActivity.this,MainActivity2.class);
                    String message = result.getText().toString();
                    //build bundle and put result in
                    Bundle bundle = new Bundle();
                    bundle.putString("result",message);
                    String recommand = dia.getText().toString();
                    bundle.putString("recommand",recommand);
                    intent.putExtras(bundle);

                    //activate intent, with bundle.
                    startActivity(intent);
                }

            }
        });
    }
}