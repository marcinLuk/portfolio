import.meta.glob([
  '../images/**',
  '../fonts/**',
]);
import { createRoot } from 'react-dom/client';

export default function MyApp({testProps = 'hello world'}) {
  return (
    <div>
      <h1>{testProps}</h1>
    </div>
  );
}
const root = createRoot(document.getElementById('test'));
root.render(<MyApp/>);
